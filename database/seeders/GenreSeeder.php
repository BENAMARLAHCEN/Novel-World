<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Novel;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Statu::factory(10)->create();
        // $novelStatuses = [
        //     'Ongoing',
        //     'Completed',
        //     'Dropped',
        //     'Hiatus',
        // ];

        // foreach ($novelStatuses as $status) {
        //     Statu::create([
        //         'name' => $status,
        //         'color' => '#000000',
        //         'background_color' => '#000000',
        //         'border_color' => '#000000',
        //         'text_color' => '#000000',
        //         'icon' => 'fas fa-book',
        //     ]);
        // }

        // $novelIds = Novel::pluck('id')->toArray();
        // $genreIds = Genre::pluck('id')->toArray();

        // foreach ($novelIds as $novelId) {
        //     $genreId = $genreIds[array_rand($genreIds)];
        //     Novel::find($novelId)->update([
        //         'genre_id' => $genreId,
        //     ]);
        // }

        $genres = [
            'Action',
            'Adventure',
            'Comedy',
            'Drama',
            'Fantasy',
            'Historical',
            'Horror',
            'Mystery',
            'Romance',
            'Sci-Fi',
            'Slice of Life',
            'Sports',
            'Supernatural',
            'Tragedy',
            'Wuxia',
            'Xianxia',
            'Xuanhuan',
            'Yaoi',
            'Yuri',
            'Mecha',
            'Psychological',
            'Shounen',
            'Shoujo',
            'Seinen',
            'Josei',
            'Harem',
            'Martial Arts',
            'School Life',
            'Military',
            'Music',
            'Parody',
            'Police',
            'Post-Apocalyptic',
            'Reverse Harem',
            'Samurai',
            'Super Power',
            'Vampire',
            'Webtoons',
            'Zombies',
            'Isekai',
            'Reincarnation',
            'Magic',
            'Demons',
            'Ghosts',
            'Monsters',
            'Villainess'
        ];

        foreach ($genres as $genre) {
            Genre::create([
                'name' => $genre,
                'color' => '#000000',
                'background_color' => '#000000',
                'border_color' => '#000000',
                'text_color' => '#000000',
                'icon' => 'fas fa-book',
            ]);
        }
    }
}
