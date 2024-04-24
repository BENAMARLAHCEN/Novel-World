<?php

namespace App\Repositories;

use App\Models\Genre;
use App\Models\Novel;
use App\Models\Ranking;
use App\Repositories\Interfaces\INovelRepository;

class NovelRepository implements INovelRepository
{
    public function all($status = null, $authorId = null)
    {
        $query = Novel::query();
        if ($status) {
            $query->where('status', $status);
        }
        if ($authorId) {
            $query->where('user_id', $authorId);
        }
        return $query->latest()->get();
    }

    public function paginate(int $perPage = 10, $is_public = null, $authorId = null)
    {
        $query = Novel::query();
        $query->where('is_public', $is_public);
        if ($authorId) {
            $query->where('user_id', $authorId);
        }
        return $query->latest()->paginate($perPage);
    }

    public function findById(int $id)
    {
        return Novel::find($id);
    }

    public function create(array $attributes)
    {
        return Novel::create($attributes);
    }

    public function update(int $id, array $attributes)
    {
        return Novel::find($id)->update($attributes);
    }

    public function delete(int $id)
    {
        Novel::destroy($id);
    }

    public function attachRanking(int $novelId, int $rankingId)
    {
        $novel = Novel::find($novelId);
        $novel->rankings()->attach($rankingId);
    }

    public function detachRanking(int $novelId, int $rankingId)
    {
        $novel = Novel::find($novelId);
        $novel->rankings()->detach($rankingId);
    }

    public function syncRankings(int $novelId, array $rankings)
    {
        $novel = Novel::find($novelId);
        $novel->rankings()->sync($rankings);
    }

    public function syncGenres(int $novelId, array $genres)
    {
        $novel = Novel::find($novelId);
        $novel->genres()->sync($genres);
    }

    public function attachGenres(int $novelId, array $genres)
    {
        $novel = Novel::find($novelId);
        $novel->genres()->attach($genres);
    }

    public function getAuthorNovels(int $authorId, $perPage = null)
    {
        if ($perPage) {
            return Novel::latest()->where('user_id', $authorId)->paginate($perPage);
        }
        return Novel::latest()->where('user_id', $authorId)->get();
    }

    public function trash(int $authorId = null)
    {
        if ($authorId) {
            return Novel::latest()->onlyTrashed()->where('user_id', $authorId)->paginate(10);
        }
        return Novel::latest()->onlyTrashed()->paginate(10);
    }

    public function restore(int $id)
    {
        return Novel::latest()->onlyTrashed()->find($id)->restore();
    }

    public function forceDelete(int $id)
    {
        return Novel::onlyTrashed()->find($id)->forceDelete();
    }

    public function getGenres()
    {
        return Genre::all();
    }

    public function getRankings()
    {
        return Ranking::all();
    }

    public function getOngoingNovels()
    {
        return Novel::where('status', 'ongoing')
        ->where('is_public', 1)
        ->latest()->limit(12)->get();
    }

    public function getCompletedNovels()
    {
        return Novel::latest()->where('status', 'completed')->where('is_public', 1)->inRandomOrder()->limit(12)->get();
    }

    public function getTopNovels()
    {
        return Novel::where('is_public', 1)->whereHas('chapters', function ($query) {
            $query->where('status', 'published');
        })->withCount('chapters')->orderBy('chapters_count', 'desc')->limit(2)->get();
    }
    
    public function search($data, $perPage = 10)
    {
        $query = Novel::query();
        if (isset($data['titles']) && !empty($data['titles'])) {
            $query->where('title', 'like', '%' . $data['titles'] . '%');
        }
        
        if (isset($data['status']) && $data['status'] != 'all') {
            $query->where('status', $data['status']);
        }
        
        if (isset($data['genres']) && ($data['genres'] != 'all' || !empty($data['genres']))) {           
            $query->whereHas('genres', function ($query) use ($data) {
                $genres = explode(',', $data['genres']);
                $query->whereIn('genres.id', $genres);
            });
        }
        return $query->where('is_public', 1)->latest()->paginate($perPage);
    }
        

    public function findBySlug($slug)
    {
        return Novel::where('slug', $slug)->first();
    }

    public function getNovelsWithLatestChapter($perPage = 10)
    {
         // get all novels with their latest chapter and paginate order by latest chapter where chapter count > 0
        return Novel::where('is_public', 1)->whereHas('chapters', function ($query) {
            $query->where('status', 'published');
        })->with(['chapters' => function ($query) {
            $query->where('status', 'published')->latest()->limit(1);
        }])
        ->has('chapters')
        ->orderBy('chapters.created_at', 'desc')->paginate($perPage);
    }
    
    public function getNovelsWithMostViews($perPage = 10)
    {
        return Novel::where('is_public', 1)->whereHas('chapters', function ($query) {
            $query->where('status', 'published');
        })->withCount('views')->orderBy('views_count', 'desc')->paginate($perPage);
    }

    public function getFavorites($novelId, $perPage = 10)
    {
        return Novel::where('is_public', 1)->whereIn('id', $novelId)->paginate($perPage)->latest();
    }
}
