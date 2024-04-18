<?php 

namespace App\Services;

use App\Repositories\Interfaces\IReviewRepository;
use Illuminate\Support\Facades\DB;

class ReviewService
{

    protected $ReviewRepository;

    public function __construct(IReviewRepository $ReviewRepository)
    {
        $this->ReviewRepository = $ReviewRepository;
    }

    public function all(int $perPage = null)
    {
        if ($perPage) {
            return $this->ReviewRepository->paginate($perPage);
        }
        return $this->ReviewRepository->all();
    }

    public function findById(int $id)
    {
        return $this->ReviewRepository->findById($id);
    }

    public function store(array $attributes)
    {
        $attributes['user_id'] = auth()->id();
        DB::beginTransaction();
        try {
            $Review = $this->ReviewRepository->create($attributes);
            DB::commit();
            return $Review;
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    public function update(int $id, array $attributes)
    {
        DB::beginTransaction();
        try {
            $Review = $this->ReviewRepository->update($id, $attributes);
            DB::commit();
            return $Review;
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    public function destroy(int $id)
    {
        DB::beginTransaction();
        try {
            $Review = $this->ReviewRepository->delete($id);
            DB::commit();
            return $Review;
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    public function getUserReviews(int $userId, int $perPage = null)
    {
        return $this->ReviewRepository->getReviewByUserId($userId, $perPage);
    }

    public function getReviewByNovelId(int $novelId)
    {
        return $this->ReviewRepository->getReviewByNovelId($novelId);
    }

    public function randomReviews(int $limit)
    {
        return $this->ReviewRepository->randomReviews($limit);
    }
    
}