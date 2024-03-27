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
        $status = $this->statuService->all(5);
        return view('dashboard.admin.status.index', compact('status'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.status.create');
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
    public function show(int $id)
    {
        $status = $this->statuService->findById($id);
        return view('dashboard.admin.status.show', compact('status'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Statu $status)
    {
        $status = $this->statuService->findById($status->id);
        return view('dashboard.admin.status.edit', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Statu $status)
    {
        $this->statuService->update($status->id,$request->validated() );
        return redirect()->route('status.index')->with('success', 'Status updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $this->statuService->destroy($id);
        return redirect()->route('status.index')->with('success', 'Status deleted successfully');
    }
}
