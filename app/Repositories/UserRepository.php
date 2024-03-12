<?php

// user repository class to interact
// with the user model and the database
namespace App\Repositories;

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

    public function paginate(int $perPage)
    {
        return User::paginate($perPage);
    }
    
}
