<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Genres\StoreRequest;
use App\Http\Requests\Genres\UpdateRequest;
use App\Models\Genre;
use App\Services\GenreService;
use Illuminate\Http\Request;

class GenreController extends Controller
{

    protected $genreService;

    public function __construct(GenreService $genreService)
    {
        $this->genreService = $genreService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = $this->genreService->all(5);
        return view('dashboard.admin.genres.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.genres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $this->genreService->store($request->validated());
        return redirect()->route('genres.index')->with('success', 'genres created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $genre = $this->genreService->findById($id);
        return view('dashboard.admin.genres.show', compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genres)
    {
        $genre = $this->genreService->findById($genres->id);
        return view('dashboard.admin.genres.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Genre $genres)
    {
        $this->genreService->update($genres->id,$request->validated() );
        return redirect()->route('genres.index')->with('success', 'genres updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $this->genreService->destroy($id);
        return redirect()->route('genres.index')->with('success', 'genres deleted successfully');
    }
}
