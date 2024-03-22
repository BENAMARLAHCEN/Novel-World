<?php

// user repository class to interact
// with the user model and the database
namespace App\Repositories;

use App\Models\Role;
use App\Repositories\Interfaces\IRoleRepository;

class RoleRepository implements IRoleRepository
{
    // role repository methods will be defined here

    public function all()
    {
        // return all roles
        return Role::all();
    }

    public function findById(int $id)
    {
        // find the role by id
        return Role::find($id);
    }

    public function create(array $attributes)
    {
        // create a new role
        return Role::create($attributes);
    }

    public function update(int $id, array $attributes)
    {
        // find the role by id and update
        return Role::find($id)->update($attributes);
    }

    public function delete(int $id)
    {
        // find the role by id and delete
        Role::destroy($id);
    }
}