<?php

namespace App\Http\Controllers\Reader;

use App\Http\Controllers\Controller;
use App\Http\Requests\Reviews\StoreRequest;
use App\Services\ReviewService;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    protected $reviewService;

    public function __construct(ReviewService $reviewService)
    {
        $this->reviewService = $reviewService;
    }

    public function index()
    {
        // $this->authorize('view', 'App\Models\Review');
        $reviews = $this->reviewService->getUserReviews(auth()->id(),12);
        return view('reviews', compact('reviews'));
    }

    public function store(StoreRequest $request)
    {
        // $this->authorize('create', 'App\Models\Review');
        $this->reviewService->store($request->all());
        return back()->with('success', 'Review created successfully');
    }

    public function update(Request $request, $id)
    {
        $review = $this->reviewService->findById($id);
        $this->authorize('update', $review);
        $this->reviewService->update($request, $id);
        return back();
    }

    public function destroy($id)
    {
        $review = $this->reviewService->findById($id);
        $this->authorize('delete', $review);
        $this->reviewService->destroy($id);
        return back();
    }
    

    
}
