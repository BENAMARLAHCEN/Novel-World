<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'create users',
            'read users',
            'update users',
            'delete users',
            'create roles',
            'read roles',
            'update roles',
            'delete roles',
            'create permissions',
            'read permissions',
            'update permissions',
            'delete permissions',
        ];

        foreach ($permissions as $permission) {
            \App\Models\Permission::create(['name' => $permission]);
        }
        
    }
}
