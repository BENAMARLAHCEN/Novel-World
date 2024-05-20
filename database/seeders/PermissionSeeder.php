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

            // novels permissions
            'novel-list',
            'novel-show',
            'novel-create',
            'novel-edit',
            'novel-delete',
            'novel-restore',
            'novel-force-delete',

            // chapters permissions
            'chapter-list',
            'chapter-show',
            'chapter-create',
            'chapter-edit',
            'chapter-delete',
            'chapter-restore',
            'chapter-force-delete',

            // status permissions
            'status-list',
            'status-show',
            'status-create',
            'status-edit',
            'status-delete',

            // ranking permissions
            'ranking-list',
            'ranking-show',
            'ranking-create',
            'ranking-edit',
            'ranking-delete',

            // admin novel permissions
            'admin-novel-list',
            'approve-novel',
            'reject-novel',
            'publish-novel',
            'unpublish-novel',
            'feature-novel',
            'unfeature-novel',
            'approve-chapter',
            'reject-chapter',
            'publish-chapter',
            'unpublish-chapter',
            

        ];

        foreach ($permissions as $permission) {
            \App\Models\Permission::create(['name' => $permission]);
        }

        // Attach permissions to roles
        $roles = \App\Models\Role::all();
        $permissions = \App\Models\Permission::all();
        foreach ($roles as $role) {
            for($i = 0; $i < 5; $i++) {
                $role->givePermissionTo($permissions->random()->name);
            }
        }
    }
}
