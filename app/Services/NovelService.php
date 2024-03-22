<?php

namespace App\Services;

use App\Repositories\Interfaces\INovelRepository;
use Illuminate\Support\Str;
class NovelService
{
    private $novelRepository;

    public function __construct(INovelRepository $novelRepository)
    {
        $this->novelRepository = $novelRepository;
    }

    public function all(int $perPage = null)
    {
        if ($perPage) {
            return $this->novelRepository->paginate($perPage);
        }
        return $this->novelRepository->all();
    }

    public function findById(int $id)
    {
        return $this->novelRepository->findById($id);
    }

    public function getAuthorNovels(int $authorId)
    {
        return $this->novelRepository->getAuthorNovels($authorId);
    }

    public function create(array $attributes)
    {
        $attributes['user_id'] = auth()->id();
        $attributes['slug'] = Str::slug($attributes['title']);
        $rankings = $attributes['rankings'];
        unset($attributes['rankings']);
        $novel = $this->novelRepository->create($attributes);
        if ($novel) {
            $this->novelRepository->syncRankings($novel->id, $rankings);
            return $novel;
        }
        return response()->back()->with('error', 'Failed to create novel');
    }

    public function update(int $id, array $attributes)
    {
        $attributes['slug'] = Str::slug($attributes['title']);
        $rankings = $attributes['rankings'];
        unset($attributes['rankings']);
        $novel = $this->novelRepository->update($id, $attributes);
        if ($novel) {
            $this->novelRepository->syncRankings($id, $rankings);
            return $novel;
        }
        return response()->back()->with('error', 'Failed to update novel');
    }

    public function delete(int $id)
    {
        return $this->novelRepository->delete($id);
    }


}