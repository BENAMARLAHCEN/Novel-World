<?php

namespace App\Repositories\Interfaces;

interface IChapterRepository
{
    public function all($novelId = null, $status = null);

    public function paginate(int $perPage = 10, $status = null, $novelId = null);

    public function findById(int $id);

    public function create(array $attributes);

    public function update(int $id, array $attributes);

    public function delete(int $id);

    public function getNovelChapters(int $novelId);
}