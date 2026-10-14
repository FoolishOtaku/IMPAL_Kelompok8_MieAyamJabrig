<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds for CeLOE LMS prototype.
     */
    public function run(): void
    {
        $defaultPassword = Hash::make('password123');

        $users = [
            [
                'username'          => '103012400346',
                'name'              => 'Budi Mahasiswa Pratama',
                'email'             => 'mahasiswa@student.telkomuniversity.ac.id',
                'role'              => User::ROLE_MAHASISWA,
                'prodi'             => 'S1 Informatika',
                'phone'             => '081234567890',
                'password'          => $defaultPassword,
                'email_verified_at' => now(),
            ],
            [
                'username'          => '19850101201012',
                'name'              => 'Dr. Ir. Siti Dosen Rahayu, M.T.',
                'email'             => 'dosen@telkomuniversity.ac.id',
                'role'              => User::ROLE_DOSEN,
                'prodi'             => 'S1 Informatika',
                'phone'             => '081298765432',
                'password'          => $defaultPassword,
                'email_verified_at' => now(),
            ],
            [
                'username'          => 'admin.lms',
                'name'              => 'Administrator CeLOE LMS',
                'email'             => 'admin@telkomuniversity.ac.id',
                'role'              => User::ROLE_ADMIN,
                'prodi'             => 'Bagian Sistem Informasi & CeLOE',
                'phone'             => '081122334455',
                'password'          => $defaultPassword,
                'email_verified_at' => now(),
            ],
        ];

        foreach ($users as $data) {
            User::updateOrCreate(
                ['username' => $data['username']],
                $data
            );
        }
    }
}
