<?php

namespace App\Repositories;

use App\Models\Statu;

class StatuRepository
{
    public function all()
    {
        return Statu::all();
    }

    public function findById(int $id)
    {
        return Statu::find($id);
    }

    public function create(array $attributes)
    {
        return Statu::create($attributes);
    }

    public function update(int $id, array $attributes)
    {
        return Statu::find($id)->update($attributes);
    }

    public function delete(int $id)
    {
        Statu::destroy($id);
    }
}