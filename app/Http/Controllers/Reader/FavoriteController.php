<?php

namespace App\Http\Controllers\Reader;

use App\Http\Controllers\Controller;
use App\Services\NovelService;
use App\Services\UserService;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    protected $userService;
    protected $novelService;

    public function __construct(UserService $userService, NovelService $novelService)
    {
        $this->userService = $userService;
        $this->novelService = $novelService;
    }

    public function index()
    {
        $novels = $this->novelService->getFavorites();
        return view('favorites', compact('novels'));
    }

    // store method and destroy method using ajax
    // store method and destroy method using the same method

    public function store(Request $request)
    {
        return $this->userService->toggleFavorite($request->novel_id);
    }
    public function destroy(Request $request)
    {
        return $this->userService->toggleFavorite($request->novel_id);
    }

}
