<?php

namespace App\Repositories\Interfaces;

interface INovelRepository
{
    public function all();
    public function paginate(int $perPage = 10);
    public function findById(int $id);
    public function create(array $attributes);
    public function update(int $id, array $attributes);
    public function delete(int $id);
    public function attachRanking(int $novelId, int $rankingId);
    public function detachRanking(int $novelId, int $rankingId);
    public function syncRankings(int $novelId, array $rankings);
    public function getAuthorNovels(int $authorId);

    // force delete and restore methods
    public function trash(int $authorId = null); // get all novels that are trashed
    public function restore(int $id); // restore a specific novel from trash
    public function forceDelete(int $id); // permanently delete a specific novel from trash

}