<?php 

namespace App\Repositories; 

use App\Models\Review; 
use App\Repositories\Interfaces\IReviewRepository;

class ReviewRepository extends IReviewRepository 
{ 
    
    public function all()
    {
        return Review::all();
    }

    public function paginate(int $perPage = 10)
    {
        return Review::paginate($perPage);
    }

    public function findById(int $id)
    {
        return Review::find($id);
    }

    public function create(array $attributes)
    {
        return Review::create($attributes);
    }

    public function update(int $id, array $attributes)
    {
        return Review::find($id)->update($attributes);
    }

    public function delete(int $id)
    {
        return Review::destroy($id);
    }
}