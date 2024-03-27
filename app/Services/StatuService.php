<?php

namespace App\Services;

use App\Repositories\Interfaces\IStatuRepository;
use App\Repositories\StatuRepository;

class StatuService
{
    private $statuRepository;

    public function __construct(StatuRepository $statuRepository)
    {
        $this->statuRepository = $statuRepository;
    }

    public function all(int $perPage = null)
    {
        if ($perPage) {
            return $this->statuRepository->paginate($perPage);
        }
        return $this->statuRepository->all();
    }

    public function findById(int $id)
    {
        return $this->statuRepository->findById($id);
    }

    public function store(array $attributes)
    {
        return $this->statuRepository->create($attributes);
    }

    public function update(int $id, array $attributes)
    {
        return $this->statuRepository->update($id, $attributes);
    }

    public function destroy(int $id)
    {
        return $this->statuRepository->delete($id);
    }
}