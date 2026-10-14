<?php

namespace Tests\Feature;

use App\Models\User;
use Database\Seeders\UserSeeder;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class AuthTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->withoutMiddleware([
            \Illuminate\Foundation\Http\Middleware\PreventRequestForgery::class,
            \Illuminate\Foundation\Http\Middleware\ValidateCsrfToken::class,
        ]);
        // Ensure standard demo users are seeded
        $this->seed(UserSeeder::class);
    }

    public function test_login_page_renders_successfully(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
        $response->assertSee('CeLOE LMS');
        $response->assertSee('Mahasiswa');
        $response->assertSee('Dosen');
        $response->assertSee('Admin');
    }

    public function test_mahasiswa_can_authenticate_with_nim_and_redirects_to_dashboard(): void
    {
        $response = $this->post('/login', [
            'username' => '103012400346',
            'password' => 'password123',
            'remember' => true,
        ]);

        $response->assertRedirect('/dashboard');
        $this->assertTrue(Auth::check());
        $this->assertEquals('103012400346', Auth::user()->username);
        $this->assertTrue(Auth::user()->isMahasiswa());
    }

    public function test_dosen_can_authenticate_with_nip_and_redirects_to_dashboard(): void
    {
        $response = $this->post('/login', [
            'username' => '19850101201012',
            'password' => 'password123',
        ]);

        $response->assertRedirect('/dashboard');
        $this->assertTrue(Auth::check());
        $this->assertEquals('19850101201012', Auth::user()->username);
        $this->assertTrue(Auth::user()->isDosen());
    }

    public function test_admin_can_authenticate_with_username_and_redirects_to_dashboard(): void
    {
        $response = $this->post('/login', [
            'username' => 'admin.lms',
            'password' => 'password123',
        ]);

        $response->assertRedirect('/dashboard');
        $this->assertTrue(Auth::check());
        $this->assertEquals('admin.lms', Auth::user()->username);
        $this->assertTrue(Auth::user()->isAdmin());
    }

    public function test_user_can_authenticate_with_email(): void
    {
        $response = $this->post('/login', [
            'username' => 'mahasiswa@student.telkomuniversity.ac.id',
            'password' => 'password123',
        ]);

        $response->assertRedirect('/dashboard');
        $this->assertTrue(Auth::check());
        $this->assertEquals('103012400346', Auth::user()->username);
    }

    public function test_login_fails_with_invalid_credentials(): void
    {
        $response = $this->from('/login')->post('/login', [
            'username' => '103012400346',
            'password' => 'wrongpassword',
        ]);

        $response->assertRedirect('/login');
        $response->assertSessionHasErrors('username');
        $this->assertFalse(Auth::check());
    }

    public function test_unauthenticated_user_cannot_access_dashboard(): void
    {
        $response = $this->get('/dashboard');

        $response->assertRedirect('/login');
    }

    public function test_authenticated_user_can_view_dashboard(): void
    {
        $user = User::where('username', '103012400346')->first();

        $response = $this->actingAs($user)->get('/dashboard');

        $response->assertStatus(200);
        $response->assertSee('Budi Mahasiswa Pratama');
        $response->assertSee('Mahasiswa');
        $response->assertSee('103012400346');
    }

    public function test_authenticated_user_can_logout(): void
    {
        $user = User::where('username', '103012400346')->first();

        $response = $this->actingAs($user)->post('/logout');

        $response->assertRedirect('/login');
        $response->assertSessionHas('status');
        $this->assertFalse(Auth::check());
    }
}
