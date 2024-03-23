<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\NovelService;
use Illuminate\Http\Request;

class NovelController extends Controller
{
    protected $novelService;

    public function __construct(NovelService $novelService)
    {
        $this->novelService = $novelService;
    }
    // Display a listing of the novels.
    // admin have access to all novels
    // admin have to accept or reject the novels before they are published on the platform 
    // admin have to be able to filter novels by status (pending, accepted, rejected)
    

    public function index()
    {
        $novels = $this->novelService->getAdminNovels();
        return view('admin.novels.index', compact('novels'));
    }

    public function rejectedNovels()
    {
        $novels = $this->novelService->getAdminNovels('rejected');
        return view('admin.novels.index', compact('novels'));
    }

    public function publishedNovels()
    {
        $novels = $this->novelService->getAdminNovels('published');
        return view('admin.novels.index', compact('novels'));
    }

    public function showNovel(int $id)
    {
        $novel = $this->novelService->findById($id);
        return view('admin.novels.show', compact('novel'));
    }

    public function rejectNovel(int $id)
    {
        $this->novelService->reject($id);
        return redirect()->route('novels.index')->with('success', 'Novel rejected successfully');
    }

    public function publishNovel(int $id)
    {
        $this->novelService->publish($id);
        return redirect()->route('novels.index')->with('success', 'Novel published successfully');
    }
    
}
