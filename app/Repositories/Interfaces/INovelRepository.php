<?php

namespace App\Repositories\Interfaces;

interface INovelRepository
{
    public function all();
    public function paginate(int $perPage = 10, $is_public = '1', $authorId = null);
    public function findById(int $id);
    public function create(array $attributes);
    public function update(int $id, array $attributes);
    public function delete(int $id);
    public function attachRanking(int $novelId, int $rankingId);
    public function detachRanking(int $novelId, int $rankingId);
    public function syncRankings(int $novelId, array $rankings);
    public function syncGenres(int $novelId, array $genres);
    public function getAuthorNovels(int $authorId, int $perPage = null);

    // force delete and restore methods
    public function trash(int $authorId = null); // get all novels that are trashed
    public function restore(int $id); // restore a specific novel from trash
    public function forceDelete(int $id); // permanently delete a specific novel from trash

    // get status and ranking methods
    public function getGenres();
    public function getRankings();

    // home page methods

    public function getOngoingNovels();
    public function getCompletedNovels();
    public function getTopNovels();

    public function search($data, $perPage = 10);
    public function findBySlug($slug);

    public function getNovelsWithLatestChapter($perPage = 10);
    public function getNovelsWithMostViews($perPage = 10);

    public function getFavorites($novelId, $perPage = 10);

}