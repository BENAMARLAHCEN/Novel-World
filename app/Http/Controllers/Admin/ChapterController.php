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

    public function index()
    {
        $chapters = $this->chapterService->getAdminChapters();
        return view('admin.chapters.index', compact('chapters'));
    }

    public function rejectedChapters()
    {
        $chapters = $this->chapterService->getAdminChapters('rejected');
        return view('admin.chapters.index', compact('chapters'));
    }

    public function publishedChapters()
    {
        $chapters = $this->chapterService->getAdminChapters('published');
        return view('admin.chapters.index', compact('chapters'));
    }

    public function showChapter(int $id)
    {
        $chapter = $this->chapterService->findById($id);
        return view('admin.chapters.show', compact('chapter'));
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
