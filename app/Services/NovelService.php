<?php

namespace App\Services;

use App\Repositories\Interfaces\INovelRepository;
use Illuminate\Support\Facades\Storage;
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

    public function getAuthorNovels(int $authorId, int $perPage = 10)
    {
        return $this->novelRepository->getAuthorNovels($authorId, $perPage);
    }

    public function create($request)
    {
        $attributes  = $request->validated();
        $attributes['user_id'] = auth()->id();
        $attributes['slug'] = Str::slug($attributes['title']);
        $genres = $attributes['genres'];
        unset($attributes['genres']);
        // store novel cover image
        if ($request->hasFile('cover')) {
            
            $attributes['cover'] = $request->file('cover')->store('novels');
        }

        $novel = $this->novelRepository->create($attributes);
        if ($novel) {
            $this->novelRepository->syncGenres($novel->id, $genres);
            return $novel;
        }
        return response()->back()->with('error', 'Failed to create novel');
    }

    public function update(int $id, $request)
    {
        $attributes = $request->validated();
        $attributes['slug'] = Str::slug($attributes['title']);
        $genres = $attributes['genres'];
        unset($attributes['genres']);
        // update novel cover image
        if ($request->hasFile('cover')) {
            $attributes['cover'] = $request->file('cover')->store('novels');
            // delete old cover image
            $oldCover = $this->novelRepository->findById($id)->cover;
            if ($oldCover) {
                Storage::delete($oldCover);
            }
        }

        $novel = $this->novelRepository->update($id, $attributes);
        if ($novel) {
            $this->novelRepository->syncGenres($id, $genres);
            return $novel;
        }
        return response()->back()->with('error', 'Failed to update novel');
        
    }

    public function delete(int $id)
    {
        return $this->novelRepository->delete($id);
    }

    public function getTrash(int $authorId = null)
    {
        return $this->novelRepository->trash($authorId);
    }

    public function restore(int $id)
    {
        return $this->novelRepository->restore($id);
    }

    public function forceDelete(int $id)
    {
        return $this->novelRepository->forceDelete($id);
    }

    public function getRankings()
    {
        return $this->novelRepository->getRankings();
    }

    public function getGenres()
    {
        return $this->novelRepository->getGenres();
    }

    // admin methods

    public function getAdminNovels(bool $is_public = null)
    {
        return $this->novelRepository->paginate(10, $is_public);
    }

    public function publish(int $id)
    {
        return $this->novelRepository->update($id, ['is_public' => 1]);
    }

    public function reject(int $id)
    {
        return $this->novelRepository->update($id, ['is_public' => 0]);
    }

}