<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->unique()->after('id')->comment('NIM, NIP, atau username unik');
            $table->string('role', 32)->default('mahasiswa')->index()->after('email')->comment('mahasiswa, dosen, admin');
            $table->string('prodi')->nullable()->after('role')->comment('Program Studi pengguna');
            $table->string('phone', 32)->nullable()->after('prodi');
            $table->string('avatar')->nullable()->after('phone');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['username', 'role', 'prodi', 'phone', 'avatar']);
        });
    }
};
