<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $siswas = User::role('siswa')->get();

        foreach ($siswas as $siswa) {
            // Membuat 2 project untuk setiap siswa
            for ($i = 1; $i <= 2; $i++) {
                $project = $siswa->projects()->create([
                    'title' => "Project {$siswa->name} - {$i}",
                    'description' => "Deskripsi proyek {$i} dari siswa {$siswa->name}.",
                ]);

                $tags = Tag::inRandomOrder()->limit(3)->get(); // Ambil 3 tag secara acak
                $project->tags()->attach($tags);
            }
        }
    }
}
