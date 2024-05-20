<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([RoleSeeder::class]);
        $this->call([PermissionSeeder::class]);
        \App\Models\User::factory(10)->create();
        $this->call([UserRoleSeeder::class]);
        $this->call([ProfileSeeder::class]);
        $this->call([NovelSeeder::class]);
        $this->call([GenreSeeder::class]);
        $this->call([NovelGenreSeeder::class]);
        $this->call([ReviewSeeder::class]);
        $this->call([ChapterSeeder::class]);

        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
