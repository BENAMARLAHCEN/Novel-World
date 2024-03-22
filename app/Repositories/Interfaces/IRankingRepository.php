<?php

namespace App\Repositories\Interfaces;

interface IRankingRepository
{
    public function all();
    public function paginate(int $perPage = 10);
    public function findById(int $id);
    public function create(array $attributes);
    public function update(int $id, array $attributes);
    public function delete(int $id);

}