<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\View\View;

class LoginController extends Controller
{
    /**
     * Maximum failed login attempts before throttle lock.
     */
    protected int $maxAttempts = 5;

    /**
     * Decay seconds for rate limiting.
     */
    protected int $decaySeconds = 60;

    /**
     * Show the CeLOE LMS login form (FR-01 / L001).
     */
    public function showLoginForm(): View|RedirectResponse
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        return view('auth.login');
    }

    /**
     * Handle an authentication attempt (validasiLogin & prosesAutentikasi).
     */
    public function login(Request $request): RedirectResponse
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
            return back()
                ->withInput($request->only('username', 'remember'))
                ->withErrors([
                    'username' => "Terlalu banyak percobaan masuk yang gagal. Silakan coba kembali dalam {$seconds} detik.",
                ]);
        }

        $input = trim($request->input('username'));
        $field = filter_var($input, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $credentials = [
            $field     => $input,
            'password' => $request->input('password'),
        ];

        $remember = $request->boolean('remember', true);

        if (Auth::attempt($credentials, $remember)) {
            RateLimiter::clear($throttleKey);
            $request->session()->regenerate();

            return redirect()->intended(route('dashboard'));
        }

        RateLimiter::hit($throttleKey, $this->decaySeconds);

        return back()
            ->withInput($request->only('username', 'remember'))
            ->withErrors([
                'username' => 'Kredensial yang Anda masukkan salah. Periksa kembali NIM/NIP/Username dan kata sandi Anda.',
            ]);
    }

    /**
     * Log the user out of CeLOE LMS.
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('status', 'Anda telah berhasil keluar dari akun CeLOE LMS.');
    }

    /**
     * Get the rate limiting throttle key for the request.
     */
    protected function throttleKey(Request $request): string
    {
        return Str::transliterate(Str::lower($request->input('username')) . '|' . $request->ip());
    }
}
