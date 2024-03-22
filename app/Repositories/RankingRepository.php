<?php

namespace App\Repositories;

use App\Models\Ranking;

class RankingRepository
{
    public function all()
    {
        return Ranking::all();
    }

    public function findById(int $id)
    {
        return Ranking::find($id);
    }

    public function create(array $attributes)
    {
        return Ranking::create($attributes);
    }

    public function update(int $id, array $attributes)
    {
        return Ranking::find($id)->update($attributes);
    }

    public function delete(int $id)
    {
        Ranking::destroy($id);
    }
}