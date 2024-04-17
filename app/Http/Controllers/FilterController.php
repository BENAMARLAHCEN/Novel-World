<?php

namespace App\Http\Controllers;

use App\Services\ChapterService;
use App\Services\GenreService;
use App\Services\NovelService;
use App\Services\ReviewService;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    protected $novelService;
    protected $chapterService;
    protected $generService;
    public function __construct(NovelService $novelService, ChapterService $chapterService, GenreService $generService)
    {
        $this->novelService = $novelService;
        $this->chapterService = $chapterService;
        $this->generService = $generService;
    }

    public function filter(Request $request)
    {
        $geners = $this->generService->all();
        return view('filter');
    }

    public function search(Request $request)
    {
        $novels = $this->novelService->search($request);
        return view('search', compact('novels'));
    }
}
