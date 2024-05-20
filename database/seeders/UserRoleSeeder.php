<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = \App\Models\Role::all();
        $users = \App\Models\User::all();

        foreach ($users as $user) {
            $user->roles()->attach($roles->random(rand(1, 2))->pluck('id'));
        }
    }
}
