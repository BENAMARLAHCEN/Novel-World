<?php

// user repository class to interact
// with the user model and the database
namespace App\Repositories;

use App\Models\Role;
use App\Models\User;
use App\Repositories\Interfaces\IUserRepository;

class UserRepository implements IUserRepository
{
    public function create(array $attributes)
    {
        return User::create($attributes);
    }

    public function findByEmail(string $email)
    {
        return User::where('email', $email)->first();
    }

    public function findByVerifyToken(string $token)
    {
        return User::where('verify_token', $token)->first();
    }

    public function findById(int $id)
    {
        return User::find($id);
    }

    public function update(int $id, array $attributes)
    {
        return User::find($id)->update($attributes);
    }

    public function delete(int $id)
    {
        return User::destroy($id);
    }

    public function all()
    {
        return User::all();
    }

    public function paginate(int $perPage,$role)
    {
        if ($role) {
            return User::latest()->whereHas('roles', function ($query) use ($role) {
                $query->where('name', $role);
            })->paginate($perPage);
        }
        return User::latest()->paginate($perPage);
    }

    public function countOf($role = null)
    {
        if ($role) {
            return User::whereHas('roles', function ($query) use ($role) {
                $query->where('name', $role);
            })->count();
        }
        return User::count();
    }
}
