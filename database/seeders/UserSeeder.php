<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sisipkan data awal di tabel users sesuai Modul Hal. 30-31
        DB::table('users')->insert([
            'nama'     => 'Rudy Eko',
            'email'    => 'rudyekoprasetya@mail.com',
            'password' => Hash::make('123456'),
            'foto'     => '',
            'role'     => 'admin',
        ]);
    }
}
