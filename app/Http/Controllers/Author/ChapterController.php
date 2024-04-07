<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Http\Requests\Chapters\StoreRequest;
use App\Http\Requests\Chapters\UpdateRequest;
use App\Models\Novel;
use App\Services\ChapterService;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    protected $chapterService;

    public function __construct(ChapterService $chapterService)
    {
        $this->chapterService = $chapterService;
    }

    public function chapters($id)
    {
        $novel = Novel::find($id);
        $chapters = $this->chapterService->getNovelChapters($id);
        return view('dashboard.author.chapters.index', compact('chapters', 'novel'));
    }

    public function createChapter($id)
    {
        $novel = Novel::find($id);
        return view('dashboard.author.chapters.create', compact('novel'));
    }

    public function storeChapter(StoreRequest $request,$id)
    {
        $this->chapterService->create($request, $id);
        return redirect()->route('author.novels.chapters', $id)->with('success', 'Chapter created successfully');
    }


    public function editChapter($id, $chapterId)
    {
        $novel = Novel::find($id);
        $chapter = $this->chapterService->findById($chapterId);
        return view('dashboard.author.chapters.edit', compact('chapter', 'novel'));
    }

    public function updateChapter(UpdateRequest $request,$id, $chapterId)
    {
        $this->chapterService->update($chapterId, $request);
        return redirect()->route('author.novels.chapters', $id)->with('success', 'Chapter updated successfully');
    }

    public function destroyChapter($id, $chapterId)
    {
        $this->chapterService->delete($chapterId);
        return redirect()->route('author.novels.chapters', $id)->with('success', 'Chapter deleted successfully');
    }

    public function showChapter($id, $chapterId)
    {
        $novel = Novel::find($id);
        $chapter = $this->chapterService->findById($chapterId);
        return view('dashboard.author.chapters.show', compact('chapter', 'novel'));
    }


}
