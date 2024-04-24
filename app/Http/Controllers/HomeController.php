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

    public function updates(){
        // get all novels with their latest chapter and paginate order by latest chapter
        $novels = $this->novelService->getNovelsWithLatestChapter();
        return view('updates', compact('novels'));
    }
        


    public function novel($slug)
    {
        $novel = $this->novelService->getNovelBySlug($slug);
        $chapters = $this->chapterService->getChaptersByNovel($novel->id);
        $reviews = $novel->reviews;
        return view('novel', compact('novel', 'chapters', 'reviews'));
    }

    public function chapter($slug, $number)
    {
        $novel = $this->novelService->getNovelBySlug($slug);
        if($novel){
            $chapter = $this->chapterService->getChapterByNumber($novel->id, $number);
            if(!$chapter){
                return redirect()->back()->with('error', 'Chapter not found');
            }
            $view = $this->chapterService->incrementViews($chapter->id);
            $nextChapter = $this->chapterService->getNextChapter($novel->id, $number);
            $previousChapter = $this->chapterService->getPreviousChapter($novel->id, $number);
            return view('read', compact('chapter' , 'novel', 'nextChapter', 'previousChapter'));
        }
        return redirect()->back()->with('error', 'Novel not found');
    }


        


}
