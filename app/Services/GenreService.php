<?php

namespace App\Services;

use App\Repositories\Interfaces\IGenreRepository;

class GenreService
{
    private $genreRepository;

    public function __construct(IGenreRepository $genreRepository)
    {
        $this->genreRepository = $genreRepository;
    }

    public function all(int $perPage = null)
    {
        if ($perPage) {
            return $this->genreRepository->paginate($perPage);
        }
        return $this->genreRepository->all();
    }

    public function findById(int $id)
    {
        return $this->genreRepository->findById($id);
    }

    public function store(array $attributes)
    {
        return $this->genreRepository->create($attributes);
    }

    public function update(int $id, array $attributes)
    {
        return $this->genreRepository->update($id, $attributes);
    }

    public function destroy(int $id)
    {
        return $this->genreRepository->delete($id);
    }
}