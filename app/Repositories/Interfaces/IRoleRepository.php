<?php

// user repository interface to define the methods that the user repository class should implement
namespace App\Repositories\Interfaces;

interface IRoleRepository
{
    public function all();
    public function findById(int $id);
    public function create(array $attributes);
    public function update(int $id, array $attributes);
    public function delete(int $id);

}