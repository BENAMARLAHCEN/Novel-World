<?php 

namespace App\Repositories; 

use App\Models\Review; 
use App\Repositories\Interfaces\IReviewRepository;

class ReviewRepository implements IReviewRepository 
{ 
    
    public function all()
    {
        return Review::all();
    }

    public function paginate(int $perPage = 10)
    {
        return Review::paginate($perPage)->latest();
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

    public function randomReviews(int $limit)
    {
        return Review::inRandomOrder()->limit($limit)->get();
    }

    public function getReviewByUserId(int $userId, int $perPage = null)
    {
        if ($perPage) {
            return Review::where('user_id', $userId)->paginate($perPage);
        }
        return Review::where('user_id', $userId)->get()->latest();
    }

    public function getReviewByNovelId(int $novelId, int $perPage = null)
    {
        if ($perPage) {
            return Review::where('novel_id', $novelId)->paginate($perPage);
        }
        return Review::where('novel_id', $novelId)->get()->latest();
    }

    public function count()
    {
        return Review::count();
    }
}