<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

/**
 * Class C-01 LoginController
 * Sesuai dokumen perancangan DPPL Bagian 3.3 (Tabel Kelas C-01) & Bagian 3.4 (Algoritma #1)
 */
class LoginController extends Controller
{
    /**
     * Data user yang sedang diautentikasi.
     * Sesuai DPPL C-01: - userData : User
     */
    protected ?User $userData = null;

    /**
     * Batas percobaan login sebelum terkena throttle / rate limit.
     */
    protected int $maxAttempts = 5;

    /**
     * Durasi pembekuan login (dalam detik) jika melebihi batas percobaan.
     */
    protected int $decaySeconds = 60;

    /**
     * Menampilkan antarmuka Halaman Login (FR-01 / L001).
     */
    public function showLoginForm(): View|RedirectResponse
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        return view('auth.login');
    }

    /**
     * Validasi input kredensial login dan status rate-limit.
     * Sesuai DPPL C-01: + validasiLogin()
     *
     * @throws ValidationException
     */
    public function validasiLogin(Request $request): array
    {
        $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ], [
            'username.required' => 'Mohon isi Username, NIM, atau NIP Anda.',
            'password.required' => 'Mohon masukkan kata sandi Anda.',
        ]);

        $throttleKey = $this->throttleKey($request);

        if (RateLimiter::tooManyAttempts($throttleKey, $this->maxAttempts)) {
            $seconds = RateLimiter::availableIn($throttleKey);
            throw ValidationException::withMessages([
                'username' => "Terlalu banyak percobaan masuk yang gagal. Silakan coba kembali dalam {$seconds} detik.",
            ]);
        }

        $input = trim($request->input('username'));
        $field = filter_var($input, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        return [
            'credentials' => [
                $field     => $input,
                'password' => $request->input('password'),
            ],
            'remember'    => $request->boolean('remember', true),
            'throttleKey' => $throttleKey,
        ];
    }

    /**
     * Memproses verifikasi kredensial ke database / penyedia autentikasi.
     * Sesuai DPPL C-01: + prosesAutentikasi()
     */
    public function prosesAutentikasi(array $credentials, bool $remember = true): bool
    {
        if (Auth::attempt($credentials, $remember)) {
            /** @var User $authenticatedUser */
            $authenticatedUser = Auth::user();
            $this->userData = $authenticatedUser;
            return true;
        }

        return false;
    }

    /**
     * Operasi alur utama autentikasi login pengguna.
     * Sesuai DPPL Bagian 3.4 (Algoritma #1: FUNCTION loginUser(username, password))
     */
    public function login(Request $request): RedirectResponse
    {
        // 1. Eksekusi validasiLogin()
        try {
            $validatedData = $this->validasiLogin($request);
        } catch (ValidationException $e) {
            return back()
                ->withInput($request->only('username', 'remember'))
                ->withErrors($e->errors());
        }

        $throttleKey = $validatedData['throttleKey'];

        // 2. Eksekusi prosesAutentikasi()
        if ($this->prosesAutentikasi($validatedData['credentials'], $validatedData['remember'])) {
            RateLimiter::clear($throttleKey);
            $request->session()->regenerate();

            // Redirect ke dashboard sesuai peran pengguna (userData.role)
            return redirect()->intended(route('dashboard'));
        }

        // Catat kegagalan pada rate limiter
        RateLimiter::hit($throttleKey, $this->decaySeconds);

        return back()
            ->withInput($request->only('username', 'remember'))
            ->withErrors([
                'username' => 'Kredensial yang Anda masukkan salah. Periksa kembali NIM/NIP/Username dan kata sandi Anda.',
            ]);
    }

    /**
     * Mengeluarkan pengguna dari sesi aktif (Logout).
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $this->userData = null;

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('status', 'Anda telah berhasil keluar dari akun CeLOE LMS.');
    }

    /**
     * Kunci throttle rate limit berdasarkan identifier input dan alamat IP.
     */
    protected function throttleKey(Request $request): string
    {
        return Str::transliterate(Str::lower($request->input('username')) . '|' . $request->ip());
    }
}
