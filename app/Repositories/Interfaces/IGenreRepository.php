<?php

// user repository interface to define the methods that the user repository class should implement
namespace App\Repositories\Interfaces;

interface IGenreRepository
{
    public function all();
    public function paginate(int $perPage = 10);
    public function findById(int $id);
    public function create(array $attributes);
    public function update(int $id, array $attributes);
    public function delete(int $id);
}