<?php

namespace Database\Seeders;

use App\Models\Novel;
use App\Models\Statu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatuSeeder extends Seeder
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
        $statusIds = Statu::pluck('id')->toArray();

        foreach ($novelIds as $novelId) {
            $statusId = $statusIds[array_rand($statusIds)];
            Novel::find($novelId)->update([
                'statu_id' => $statusId,
            ]);
        }
    }
}
