<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Rankings\StoreRequest;
use App\Http\Requests\Rankings\UpdateRequest;
use App\Models\ranking;
use App\Services\RankingService;

class RankingController extends Controller
{

    protected $rankingService;

    public function __construct(RankingService $rankingService)
    {
        $this->rankingService = $rankingService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rankings = $this->rankingService->all(10);
        return view('admin.rankings.index', compact('rankings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.rankings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $this->rankingService->create($request->validated());
        return redirect()->route('rankings.index')->with('success', 'Ranking created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(ranking $ranking)
    {
        return view('admin.rankings.show', compact('ranking'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ranking $ranking)
    {
        return view('admin.rankings.edit', compact('ranking'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, ranking $ranking)
    {
        $this->rankingService->update($request->validated(), $ranking->id);
        return redirect()->route('rankings.index')->with('success', 'Ranking updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ranking $ranking)
    {
        $this->rankingService->delete($ranking->id);
        return redirect()->route('rankings.index')->with('success', 'Ranking deleted successfully');
    }
}
