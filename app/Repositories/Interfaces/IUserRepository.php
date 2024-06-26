<?php

// user repository interface to define the methods that the user repository class should implement
namespace App\Repositories\Interfaces;

interface IUserRepository
{
    public function create(array $attributes);
    public function findByEmail(string $email);
    public function findByVerifyToken(string $token);
    public function findById(int $id);
    public function update(int $id, array $attributes);
    public function delete(int $id);
    public function all();
    public function paginate(int $perPage,$role);
    public function countOf($role = null);
    public function getTopAuthors($limit);
}