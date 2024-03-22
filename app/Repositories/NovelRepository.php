<?php

namespace App\Repositories;

use App\Models\Novel;

class NovelRepository
{
    public function all()
    {
        return Novel::all();
    }

    public function findById(int $id)
    {
        return Novel::find($id);
    }

    public function create(array $attributes)
    {
        return Novel::create($attributes);
    }

    public function update(int $id, array $attributes)
    {
        return Novel::find($id)->update($attributes);
    }

    public function delete(int $id)
    {
        Novel::destroy($id);
    }
}