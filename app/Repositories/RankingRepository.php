<?php

namespace App\Repositories;

use App\Models\Ranking;
use App\Repositories\Interfaces\IRankingRepository;

class RankingRepository implements IRankingRepository
{
    public function all()
    {
        return Ranking::all();
    }
    
    public function paginate(int $perPage = 10)
    {
        return Ranking::paginate($perPage);
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