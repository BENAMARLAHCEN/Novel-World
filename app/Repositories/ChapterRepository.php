<?php

namespace App\Repositories;

use App\Models\Chapter;

class ChapterRepository
{
    public function all($novelId = null, $status = null)
    {
        $query = Chapter::query();
        if ($novelId) {
            $query->where('novel_id', $novelId);
        }
        if ($status) {
            $query->where('status', $status);
        }
        return $query->get();
    }

    public function paginate(int $perPage = 10,$status = null, $novelId = null)
    {
        $query = Chapter::query();
        if ($novelId) {
            $query->where('novel_id', $novelId);
        }
        if ($status) {
            $query->where('status', $status);
        }
        return $query->paginate($perPage);
    }

    public function findById(int $id)
    {
        return Chapter::find($id);
    }

    public function create(array $attributes)
    {
        return Chapter::create($attributes);
    }

    public function update(int $id, array $attributes)
    {
        return Chapter::find($id)->update($attributes);
    }

    public function delete(int $id)
    {
        Chapter::destroy($id);
    }

    public function getNovelChapters(int $novelId)
    {
        return Chapter::where('novel_id', $novelId)->get();
    }
}