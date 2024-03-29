<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // get all user ids with role of author
        $userIds = [3,4];

        // create profile for each user

        foreach ($userIds as $userId) {
            \App\Models\Profile::create([
                'user_id' => $userId,
                'pen_name' => 'Pen-Name-' . $userId,
            ]);
        }
        
    }
}
