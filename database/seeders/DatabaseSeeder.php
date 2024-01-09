<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PermissionSeeder::class);

        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
        ]);
        $admin->assignRole('admin');

        $siswa1 = User::factory()->create([
            'name' => 'Siswa1',
            'email' => 'siswa1@gmail.com',
        ]);
        $siswa1->assignRole('siswa');

        $siswa2 = User::factory()->create([
            'name' => 'Siswa2',
            'email' => 'siswa2@gmail.com',
        ]);
        $siswa2->assignRole('siswa');

        $this->call([
            TagSeeder::class,
            ProjectSeeder::class,
        ]);
    }
}
