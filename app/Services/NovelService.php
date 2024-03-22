<?php

namespace App\Services;

use App\Repositories\Interfaces\INovelRepository;

class NovelService
{
    private $novelRepository;

    public function __construct(INovelRepository $novelRepository)
    {
        $this->novelRepository = $novelRepository;
    }

    public function all()
    {
        return $this->novelRepository->all();
    }

    public function findById(int $id)
    {
        return $this->novelRepository->findById($id);
    }

    public function create(array $attributes)
    {
        return $this->novelRepository->create($attributes);
    }

    public function update(int $id, array $attributes)
    {
        return $this->novelRepository->update($id, $attributes);
    }

    public function delete(int $id)
    {
        return $this->novelRepository->delete($id);
    }
}