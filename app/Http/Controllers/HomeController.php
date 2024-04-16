<?php

namespace App\Http\Controllers;

use App\Services\ChapterService;
use App\Services\GenreService;
use App\Services\NovelService;
use App\Services\ReviewService;
use App\Services\UserService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $novelService;
    protected $chapterService;
    protected $generService;
    protected $reviewService;
    protected $userService;
    public function __construct(NovelService $novelService, ChapterService $chapterService, GenreService $generService, ReviewService $reviewService, UserService $userService)
    {
        $this->novelService = $novelService;
        $this->chapterService = $chapterService;
        $this->generService = $generService;
        $this->reviewService = $reviewService;
        $this->userService = $userService;
    }

    public function home(){
        $ongoing = $this->novelService->getOngoingNovels();
        $completed = $this->novelService->getCompletedNovels();
        $topNovels = $this->novelService->getTopNovels();
        $reviews = $this->reviewService->randomReviews(3);

        $authorsCount = $this->userService->getCount('author');
        $novelsCount = $this->novelService->getNovelsCount();
        $viewsCount = $this->chapterService->getViewsCount();

        return view('home', compact('ongoing', 'completed', 'topNovels', 'reviews', 'authorsCount', 'novelsCount', 'viewsCount'));
    }

    public function index()
    {
        $novels = $this->novelService->getNovelsByLatestChapter();
        $chapters = $this->chapterService->getTopChapters();
        $gener = $this->generService->getGenresByNovelCount();
        $reviews = $this->reviewService->randomReviews();

        $topNovels = $this->novelService->getTopNovels();
        $authors = $this->userService->getTopAuthors();

        return view('home', compact('novels', 'chapters', 'gener', 'reviews', 'users'));
    }

    public function search(Request $request)
    {
        $novels = $this->novelService->search($request);
        return view('search', compact('novels'));
    }

    public function novel($slug)
    {
        $novel = $this->novelService->getNovelBySlug($slug);
        $chapters = $this->chapterService->getChaptersByNovel($novel->id);
        $reviews = $this->reviewService->getReviewsByNovel($novel->id);
        return view('novel', compact('novel', 'chapters', 'reviews'));
    }

    public function chapter($slug)
    {
        $chapter = $this->chapterService->getChapterBySlug($slug);
        return view('chapter', compact('chapter'));
    }


}
