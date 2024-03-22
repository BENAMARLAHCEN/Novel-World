<?php

namespace App\Services;

use App\Repositories\Interfaces\IRankingRepository;

class RankingService
{
    private $rankingRepository;

    public function __construct(IRankingRepository $rankingRepository)
    {
        $this->rankingRepository = $rankingRepository;
    }

    public function all()
    {
        return $this->rankingRepository->all();
    }

    public function findById(int $id)
    {
        return $this->rankingRepository->findById($id);
    }

    public function create(array $attributes)
    {
        return $this->rankingRepository->create($attributes);
    }

    public function update(int $id, array $attributes)
    {
        return $this->rankingRepository->update($id, $attributes);
    }

    public function delete(int $id)
    {
        return $this->rankingRepository->delete($id);
    }
}