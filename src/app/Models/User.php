<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['username', 'name', 'email', 'role', 'prodi', 'phone', 'avatar', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Role constants matching CeLOE LMS specification
     */
    public const ROLE_MAHASISWA = 'mahasiswa';
    public const ROLE_DOSEN     = 'dosen';
    public const ROLE_ADMIN     = 'admin';

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Check if user is a student (Mahasiswa)
     */
    public function isMahasiswa(): bool
    {
        return $this->role === self::ROLE_MAHASISWA;
    }

    /**
     * Check if user is a lecturer (Dosen)
     */
    public function isDosen(): bool
    {
        return $this->role === self::ROLE_DOSEN;
    }

    /**
     * Check if user is an administrator
     */
    public function isAdmin(): bool
    {
        return $this->role === self::ROLE_ADMIN;
    }

    /**
     * Formatted label for user's role
     */
    public function getRoleBadgeAttribute(): string
    {
        return match ($this->role) {
            self::ROLE_MAHASISWA => 'Mahasiswa',
            self::ROLE_DOSEN     => 'Dosen',
            self::ROLE_ADMIN     => 'Administrator',
            default              => ucfirst($this->role),
        };
    }

    /**
     * Label for the identifier (NIM / NIP / Username)
     */
    public function getIdentifierLabelAttribute(): string
    {
        return match ($this->role) {
            self::ROLE_MAHASISWA => 'NIM',
            self::ROLE_DOSEN     => 'NIP',
            default              => 'Username',
        };
    }
}

