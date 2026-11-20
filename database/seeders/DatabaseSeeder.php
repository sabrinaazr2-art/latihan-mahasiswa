<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil seeder sesuai Modul Hal. 31 & 33
        $this->call(UserSeeder::class);
        $this->call(EmployeSeeder::class);
    }
}
