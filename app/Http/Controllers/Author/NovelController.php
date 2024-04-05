<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Http\Requests\Novels\StoreRequest;
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
        
        return view('dashboard.author.novels.create', );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        // $this->authorize('create');
        $this->novelService->create($request->validated());
        return redirect()->route('dashboard.author.novels.index')->with('success', 'Novel created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Novel $novel)
    {
        // $this->authorize('view', $novel);
        return view('dashboard.author.novels.show', compact('novel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Novel $novel)
    {
        // $this->authorize('update', $novel);

        $rankings = $this->novelService->getRankings();
        $genres = $this->novelService->getGenres();

        return view('dashboard.author.novels.edit', compact('novel', 'rankings', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Novel $novel)
    {
        // $this->authorize('update', $novel);
        $this->novelService->update($request->validated(), $novel->id);
        return redirect()->route('dashboard.author.novels.index')->with('success', 'Novel updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Novel $novel)
    {
        // $this->authorize('delete', $novel);
        $this->novelService->delete($novel->id);
        return redirect()->route('dashboard.author.novels.index')->with('success', 'Novel deleted successfully');
    }

    /**
     * Restore the specified resource from storage.
     */
    public function restore(Novel $novel)
    {
        // $this->authorize('restore', $novel);
        $this->novelService->restore($novel->id);
        return redirect()->route('dashboard.author.novels.index')->with('success', 'Novel restored successfully');
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
        return redirect()->route('dashboard.author.novels.index')->with('success', 'Novel permanently deleted successfully');
    }
}
