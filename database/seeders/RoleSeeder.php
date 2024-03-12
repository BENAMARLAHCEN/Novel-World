<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'super-admin',
            'admin',
            'moderator',
            'author',
            'reader',
            'user'
        ];

        foreach ($roles as $role) {
            \App\Models\Role::create(['name' => $role]);
        }
    }
}
