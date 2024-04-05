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

        $novelIds = Novel::pluck('id')->toArray();
        $genreIds = Genre::pluck('id')->toArray();

        foreach ($novelIds as $novelId) {
            $genreId = $genreIds[array_rand($genreIds)];
            Novel::find($novelId)->update([
                'genre_id' => $genreId,
            ]);
        }
    }
}
