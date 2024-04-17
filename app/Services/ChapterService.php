<?php

namespace App\Services;

use App\Repositories\Interfaces\IChapterRepository;

class ChapterService
{
    private $chapterRepository;

    public function __construct(IChapterRepository $chapterRepository)
    {
        $this->chapterRepository = $chapterRepository;
    }

    public function all(int $perPage = null)
    {
        if ($perPage) {
            return $this->chapterRepository->paginate($perPage);
        }
        return $this->chapterRepository->all();
    }

    public function findById(int $id)
    {
        return $this->chapterRepository->findById($id);
    }

    public function getNovelChapters(int $novelId)
    {
        return $this->chapterRepository->paginate(10,$novelId);
    }

    public function getAdminChapters(string $status = 'pending', int $novelId = null)
    {
        return $this->chapterRepository->paginate(10,$status,$novelId);
    }

    public function publish(int $id)
    {
        return $this->chapterRepository->update($id, ['status' => 'published']);
    }

    public function reject(int $id)
    {
        return $this->chapterRepository->update($id, ['status' => 'rejected']);
    }

    // create, update, delete methods

    public function create($request , int $novelId)
    {
        $attributes = $request->validated();
        $attributes['novel_id'] = $novelId;
        return $this->chapterRepository->create($attributes);
    }

    public function update(int $id, $request)
    {
        $attributes = $request->validated();
        return $this->chapterRepository->update($id, $attributes);
    }

    public function delete(int $id)
    {
        return $this->chapterRepository->delete($id);
    }

    public function getViewsCount()
    {
        return $this->chapterRepository->getViewsCount('published');
    }

    public function getChaptersByNovel(int $novelId)
    {
        return $this->chapterRepository->getChaptersByNovelId($novelId);
    }

    public function getChapterByNumber(int $novelId, int $number)
    {
        return $this->chapterRepository->getChapterByNumber($novelId, $number);
    }
    public function incrementViews(int $id)
    {
        return $this->chapterRepository->update($id, ['views' => $this->chapterRepository->findById($id)->views + 1]);
    }

    public function getNextChapter(int $novelId, int $number)
    {
        return $this->chapterRepository->getNextChapter($novelId, $number);
    }

    public function getPreviousChapter(int $novelId, int $number)
    {
        return $this->chapterRepository->getPreviousChapter($novelId, $number);
    }

}