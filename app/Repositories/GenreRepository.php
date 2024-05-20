<?php

namespace App\Repositories;

use App\Models\Genre;
use App\Repositories\Interfaces\IGenreRepository;

class GenreRepository implements IGenreRepository
{
    public function all()
    {
        return Genre::latest()->get();
    }

    public function paginate(int $perPage = 10)
    {
        return Genre::latest()->paginate($perPage);
    }

    public function findById(int $id)
    {
        return Genre::find($id);
    }

    public function create(array $attributes)
    {
        return Genre::create($attributes);
    }

    public function update(int $id, array $attributes)
    {
        return Genre::find($id)->update($attributes);
    }

    public function delete(int $id)
    {
        Genre::destroy($id);
    }

    public function count()
    {
        return Genre::count();
    }
}