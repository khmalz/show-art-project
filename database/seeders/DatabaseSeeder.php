<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Project;
use App\Models\RegisterActive;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PermissionSeeder::class,
            TagSeeder::class,
        ]);

        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$12$FLLiF3x8uSXfNP3e4XV8pe5BTLpQPoNuSNJ0fvQGWJBhLPSFn0arW',
        ]);
        $admin->assignRole('admin');

        $siswa1 = User::factory()->create([
            'name' => 'Siswa 1',
            'email' => 'siswa1@gmail.com',
        ]);
        $siswa1->assignRole('siswa');
        $siswa1->siswa()->create(['generation_year' => '2023/2024']);

        $siswa2 = User::factory()->create([
            'name' => 'Siswa 2',
            'email' => 'siswa2@gmail.com',
        ]);
        $siswa2->assignRole('siswa');
        $siswa2->siswa()->create(['generation_year' => '2023/2024']);

        RegisterActive::create([
            'active' => true,
        ]);
    }
}
