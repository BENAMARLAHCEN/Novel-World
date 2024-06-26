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
        $this->authorize('viewAny', Novel::class);
        $novels = $this->novelService->getAuthorNovels(auth()->id());
        return view('dashboard.author.novels.index', compact('novels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Novel::class);
        $genres = $this->novelService->getGenres();
        return view('dashboard.author.novels.create', compact( 'genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $this->authorize('create', Novel::class);
        $this->novelService->create($request);
        return redirect()->route('author.novels.index')->with('success', 'Novel created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $novel = $this->novelService->findById($id);
        $this->authorize('view', $novel); 
        return view('dashboard.author.novels.show', compact('novel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $genres = $this->novelService->getGenres();
        $novel = $this->novelService->findById($id);
        $this->authorize('update', $novel);

        return view('dashboard.author.novels.edit', compact('novel', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request,$id)
    {
        $novel = $this->novelService->findById($id);
        $this->authorize('update', $novel);
        $this->novelService->update( $id,$request);
        return redirect()->route('author.novels.index')->with('success', 'Novel updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $novel = $this->novelService->findById($id);
        $this->authorize('delete', $novel);
        $this->novelService->delete($id);
        return redirect()->route('author.novels.index')->with('success', 'Novel deleted successfully');
    }

    /**
     * Restore the specified resource from storage.
     */
    public function restore($id)
    {
        $novel = Novel::withTrashed()->find($id);
        $this->authorize('restore', $novel);
        $this->novelService->restore($id);
        return redirect()->route('author.novels.index')->with('success', 'Novel restored successfully');
    }
    

    /**
     * Display a listing of the resource.
     */
    public function trash()
    {
        $this->authorize('viewAny', Novel::class);
        $novels = $this->novelService->getTrash(auth()->id());
        return view('dashboard.author.novels.trash', compact('novels'));
    }

    /**
     * Remove the specified resource from storage.
     */

    public function forceDelete($id)
    {
        $novel = Novel::withTrashed()->find($id);
        $this->authorize('forceDelete', $novel);
        $this->novelService->forceDelete($id);
        return redirect()->route('author.novels.index')->with('success', 'Novel permanently deleted successfully');
    }
}
