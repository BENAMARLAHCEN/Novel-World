<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Status\StoreRequest;
use App\Http\Requests\Status\UpdateRequest;
use App\Models\Statu;
use App\Services\StatuService;
use Illuminate\Http\Request;

class StatuController extends Controller
{

    protected $statuService;

    public function __construct(StatuService $statuService)
    {
        $this->statuService = $statuService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status = $this->statuService->all();
        return view('admin.status.index', compact('status'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.status.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $this->statuService->store($request->validated());
        return redirect()->route('status.index')->with('success', 'Status created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Statu $statu)
    {
        return view('admin.status.show', compact('statu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Statu $statu)
    {
        return view('admin.status.edit', compact('statu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Statu $statu)
    {
        $this->statuService->update($request->validated(), $statu->id);
        return redirect()->route('status.index')->with('success', 'Status updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Statu $statu)
    {
        $this->statuService->destroy($statu->id);
        return redirect()->route('status.index')->with('success', 'Status deleted successfully');
    }
}
