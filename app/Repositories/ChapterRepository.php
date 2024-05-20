<?php

namespace App\Repositories;

use App\Models\Chapter;
use App\Repositories\Interfaces\IChapterRepository;

class ChapterRepository implements IChapterRepository
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
        return $query->get()->latest()->sortBy('number');
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
        return $query->latest()->paginate($perPage);
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
        return Chapter::where('novel_id', $novelId)->get()->sortBy('number');
    }

    public function getViewsCount($status = 'published')
    {
        return Chapter::where('status', $status)->sum('views');
    }

    public function getChaptersByNovelId(int $novelId)
    {
        return Chapter::where('novel_id', $novelId)
        ->where('status', 'published')
        ->orderBy('number')->get();
    }

    public function getChapterByNumber($novelId, $number)
    {
        return Chapter::where('novel_id', $novelId)
        ->where('number', $number)
        ->where('status', 'published')
        ->first();
    }

    public function getNextChapter(int $novelId, int $chapterNumber)
    {
        return Chapter::where('novel_id', $novelId)
        ->where('number', '>', $chapterNumber)
        ->where('status', 'published')
        ->orderBy('number')
        ->first();
    }

    public function getPreviousChapter(int $novelId, int $chapterNumber)
    {
        return Chapter::where('novel_id', $novelId)
        ->where('number', '<', $chapterNumber)
        ->where('status', 'published')
        ->orderBy('number', 'desc')
        ->first();
    }

    public function count()
    {
        return Chapter::count();
    }

}