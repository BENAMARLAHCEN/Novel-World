<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ChapterService;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    protected $chapterService;

    public function __construct(ChapterService $chapterService)
    {
        $this->chapterService = $chapterService;
    }
    // admin have to accept or reject the chapters of the novels before they are published on the platform

    public function index(Request $request)
    {
        $status = "pending";
        $novelId = null;
        if ($request->has('status')) {
            $status = $request->status;
        }
        if ($request->has('novel')) {
            $novelId = $request->novel;
        }
        $chapters = $this->chapterService->getAdminChapters($status, $novelId);
        return view('dashboard.admin.chapters.index', compact('chapters'));
    }


    public function rejectedChapters()
    {
        $chapters = $this->chapterService->getAdminChapters('rejected');
        return view('dashboard.admin.chapters.index', compact('chapters'));
    }

    public function publishedChapters()
    {
        $chapters = $this->chapterService->getAdminChapters('published');
        return view('dashboard.admin.chapters.index', compact('chapters'));
    }

    public function show(int $id)
    {
        $chapter = $this->chapterService->findById($id);
        return view('dashboard.admin.chapters.show', compact('chapter'));
    }

    public function rejectChapter(int $id)
    {
        $this->chapterService->reject($id);
        return redirect()->route('chapters.index')->with('success', 'Chapter rejected successfully');
    }

    public function publishChapter(int $id)
    {
        $this->chapterService->publish($id);
        return redirect()->route('chapters.index')->with('success', 'Chapter published successfully');
    }
}
