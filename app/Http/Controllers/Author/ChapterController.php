<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Http\Requests\Chapters\StoreRequest;
use App\Http\Requests\Chapters\UpdateRequest;
use App\Models\Chapter;
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
        $this->authorize('viewAny', Chapter::class);
        $novel = Novel::find($id);
        $chapters = $this->chapterService->getNovelChapters($id);
        return view('dashboard.author.chapters.index', compact('chapters', 'novel'));
    }

    public function createChapter($id)
    {
        $this->authorize('create', Chapter::class);
        $novel = Novel::find($id);
        return view('dashboard.author.chapters.create', compact('novel'));
    }

    public function storeChapter(StoreRequest $request,$id)
    {
        $this->authorize('create', Chapter::class);
        $this->chapterService->create($request, $id);
        return redirect()->route('author.novels.chapters', $id)->with('success', 'Chapter created successfully');
    }


    public function editChapter($id, $chapterId)
    {
        $novel = Novel::find($id);
        $chapter = $this->chapterService->findById($chapterId);
        $this->authorize('update', $chapter);
        return view('dashboard.author.chapters.edit', compact('chapter', 'novel'));
    }

    public function updateChapter(UpdateRequest $request,$id, $chapterId)
    {
        $this->authorize('update', $this->chapterService->findById($chapterId));
        $novel = Novel::find($id);
        $this->chapterService->update($chapterId, $request);
        return redirect()->route('author.novels.chapters', $id)->with('success', 'Chapter updated successfully');
    }

    public function destroyChapter($id, $chapterId)
    {
        $this->authorize('delete', $this->chapterService->findById($chapterId));
        $this->chapterService->delete($chapterId);
        return redirect()->route('author.novels.chapters', $id)->with('success', 'Chapter deleted successfully');
    }

    public function showChapter($id, $chapterId)
    {
        $this->authorize('view', $this->chapterService->findById($chapterId));
        $novel = Novel::find($id);
        $chapter = $this->chapterService->findById($chapterId);
        return view('dashboard.author.chapters.show', compact('chapter', 'novel'));
    }


}
