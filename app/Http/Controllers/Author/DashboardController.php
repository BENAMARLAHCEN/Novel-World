<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Models\Review;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // get 4 random review from this user novels 
        $novels = auth()->user()->novels->pluck('id');
        $reviews = Review::whereIn('novel_id', $novels)->inRandomOrder()->limit(4)->get();
        // top chapter of this user novels in view composer
        $chapters = Chapter::whereIn('novel_id', $novels)->orderBy('views', 'desc')->limit(5)->get();
        return view('dashboard.author.dashboard', compact('reviews','chapters'));
    }
}
