<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Http\Requests\Novels\StoreRequest;
use App\Http\Requests\Novels\UpdateRequest;
use App\Models\Novel;
use App\Services\NovelService;
use Illuminate\Http\Request;

class NovelController extends Controller
{
    protected $novelService;

    public function __construct(NovelService $novelService)
    {
        $this->novelService = $novelService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $this->authorize('viewAny');
        $novels = $this->novelService->getAuthorNovels(auth()->id());
        return view('dashboard.author.novels.index', compact('novels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $this->authorize('create');
        $rankings = $this->novelService->getRankings();
        $genres = $this->novelService->getGenres();
        return view('dashboard.author.novels.create', compact('rankings', 'genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        // $this->authorize('create');
        $this->novelService->create($request);
        return redirect()->route('author.novels.index')->with('success', 'Novel created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $this->authorize('view', $novel);
        $novel = $this->novelService->findById($id);
        return view('dashboard.author.novels.show', compact('novel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $this->authorize('update', $novel);

        $rankings = $this->novelService->getRankings();
        $genres = $this->novelService->getGenres();
        $novel = $this->novelService->findById($id);

        return view('dashboard.author.novels.edit', compact('novel', 'rankings', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request,$id)
    {
        // $this->authorize('update', $novel);
        $this->novelService->update( $id,$request);
        return redirect()->route('author.novels.index')->with('success', 'Novel updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // $this->authorize('delete', $novel);
        $this->novelService->delete($id);
        return redirect()->route('author.novels.index')->with('success', 'Novel deleted successfully');
    }

    /**
     * Restore the specified resource from storage.
     */
    public function restore(Novel $novel)
    {
        // $this->authorize('restore', $novel);
        $this->novelService->restore($novel->id);
        return redirect()->route('author.novels.index')->with('success', 'Novel restored successfully');
    }

    /**
     * Display a listing of the resource.
     */
    public function trash()
    {
        // $this->authorize('viewAny');
        $novels = $this->novelService->getTrash(auth()->id());
        return view('dashboard.author.novels.trash', compact('novels'));
    }

    /**
     * Remove the specified resource from storage.
     */

    public function forceDelete(Novel $novel)
    {
        // $this->authorize('forceDelete', $novel);
        $this->novelService->forceDelete($novel->id);
        return redirect()->route('author.novels.index')->with('success', 'Novel permanently deleted successfully');
    }
}
