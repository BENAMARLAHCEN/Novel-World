<?php

namespace App\Http\Controllers;

use App\Services\ChapterService;
use App\Services\GenreService;
use App\Services\NovelService;
use App\Services\ReviewService;
use App\Services\RoleService;
use App\Services\UserService;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    protected $userService;
    protected $novelService;
    protected $chapterService;
    protected $reviewService;
    protected $genreService;
    protected $roleService;
    public function __construct(UserService $userService, NovelService $novelService, ChapterService $chapterService, ReviewService $reviewService, GenreService $genreService, RoleService $roleService)
    {
        $this->userService = $userService;
        $this->novelService = $novelService;
        $this->chapterService = $chapterService;
        $this->reviewService = $reviewService;
        $this->genreService = $genreService;
        $this->roleService = $roleService;
    }
    public function index()
    {
        $users = $this->userService->getCount();
        $novels = $this->novelService->getCount();
        $chapters = $this->chapterService->getCount();
        $reviews = $this->reviewService->getCount();
        $genres = $this->genreService->getCount();
        $authors = $this->userService->getCount('author');
        $views = $this->chapterService->getViewsCount();
        $topNovels = $this->novelService->getTopNovels(5);
        $topAuthors = $this->userService->getTopAuthors(5);
        // $roles = $this->roleService->getCount();
        return view('dashboard.admin.statistic', compact('users', 'novels',  'reviews', 'genres', 'authors', 'views', 'chapters', 'topNovels', 'topAuthors'));


    }
}
