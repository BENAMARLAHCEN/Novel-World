<?php

namespace App\Traits;

use App\Models\Role;
use App\Models\Permission;

trait HasPermissionsTrait
{
    public function givePermissionsTo(...$permissions)
    {
        $permissions = $this->getAllPermissions($permissions);
        if ($permissions === null) {
            return $this;
        }
        $this->permissions()->saveMany($permissions);
        return $this;
    }

    public function withdrawPermissionsTo(...$permissions)
    {
        $permissions = $this->getAllPermissions($permissions);
        $this->permissions()->detach($permissions);
        return $this;
    }

    public function refreshPermissions(...$permissions)
    {
        $this->permissions()->detach();
        return $this->givePermissionsTo($permissions);
    }

    public function getUserRolesPer(){
        $roles = $this->roles()->get();
        $permissions = [];
        foreach ($roles as $role) {
            $permissions = array_merge($permissions, $role->permissions()->get()->pluck('name')->toArray());
        }
        return $permissions;
    }

    public function hasPermissionTo($permission)
    {
        return $this->hasPermissionThroughRole($permission) || $this->hasPermission($permission);
    }

    public function hasPermissionThroughRole($permission)
    {

        return (bool) $this->roles->flatMap->permissions->pluck('name')->intersect($permission)->count();
    }

    public function hasRole(...$roles)
    {
        foreach ($roles as $role) {
            if ($this->roles->contains('name', $role)) {
                return true;
            }
        }
        return false;
    }

    public function assignRole(...$roles)
    {
        $roles = $this->getAllRoles($roles);
        if ($roles === null) {
            return $this;
        }
        $this->roles()->saveMany($roles);
        return $this;
    }

    public function getAllRoles(array $roles)
    {
        return Role::whereIn('name', $roles)->get();
    }



    public function roles()
    {
        return $this->belongsToMany(Role::class, 'users_roles');
    }
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'users_permissions');
    }

    public function blockPermissions()
    {
        return $this->belongsToMany(Permission::class, 'block_permissions');
    }

    public function blockPermissionsTo(...$permissions)
    {
        $permissions = $this->getAllPermissions($permissions);
        if ($permissions === null) {
            return $this;
        }
        $this->blockPermissions()->saveMany($permissions);
        return $this;
    }

    public function detachBlockPermissions()
    {
        $this->blockPermissions()->detach();
    }

    public function hasBlockPermissionTo($permission)
    {
        return $this->blockPermissions->contains('name', $permission);
    }

    protected function hasPermission($permission)
    {
        return (bool) $this->permissions->where('name', $permission->slug)->count();
    }

    protected function getAllPermissions(array $permissions)
    {
        return Permission::whereIn('name', $permissions)->get();
    }
}
