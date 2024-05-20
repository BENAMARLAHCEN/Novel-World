<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NovelGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = Genre::all();
        $novels = \App\Models\Novel::all();

        foreach ($novels as $novel) {
            $novel->genres()->attach($genres->random(rand(3, 7))->pluck('id'));
        }
    }
}
