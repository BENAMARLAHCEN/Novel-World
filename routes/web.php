<?php

use App\Http\Controllers\Admin\ChapterController;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\NovelController;
use App\Http\Controllers\Admin\RankingController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\StatuController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\VerifyController;
use App\Http\Controllers\Author\DashboardController;
use App\Http\Controllers\Author\NovelController as AuthorNovelController;
use App\Http\Controllers\StatisticController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/statistic', [StatisticController::class, 'index'])->name('statistic');

Route::get('/register',[AuthController::class,'showRegisterForm'])->name('register.form');
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::get('/login',[AuthController::class,'showLoginForm'])->name('login.form');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');
Route::get('/forgot-password',[ForgotPasswordController::class,'showForgotPasswordForm'])->name('forgot-password.form');
Route::post('/forgot-password',[ForgotPasswordController::class,'forgotPassword'])->name('forgot-password');
Route::get('/reset-password/{token}',[ForgotPasswordController::class,'showResetPasswordForm'])->name('reset-password.form');
Route::post('/reset-password',[ForgotPasswordController::class,'resetPassword'])->name('password.reset');
Route::get('/verify-email/{token}',[VerifyController::class,'verify'])->name('verify-email');

// role routes
// Route::resource('roles', RoleController::class)->except(['show']);
Route::get('/roles',[RoleController::class,'index'])->name('roles.index');
Route::get('/roles/create',[RoleController::class,'create'])->name('roles.create');
Route::post('/roles',[RoleController::class,'store'])->name('roles.store');
Route::get('/roles/{id}/edit',[RoleController::class,'edit'])->name('roles.edit');
Route::put('/roles/{id}',[RoleController::class,'update'])->name('roles.update');
Route::delete('/roles/{id}',[RoleController::class,'destroy'])->name('roles.destroy');
Route::get('/roles/{id}',[RoleController::class,'show'])->name('roles.show');


// status routes

// Route::resource('genres', GenreController::class)->except(['show']);
Route::get('/genres',[GenreController::class,'index'])->name('genres.index');
Route::get('/genres/create',[GenreController::class,'create'])->name('genres.create');
Route::post('/genres',[GenreController::class,'store'])->name('genres.store');
Route::get('/genres/{genres}/edit',[GenreController::class,'edit'])->name('genres.edit');
Route::put('/genres/{genres}',[GenreController::class,'update'])->name('genres.update');
Route::delete('/genres/{id}',[GenreController::class,'destroy'])->name('genres.destroy');
Route::get('/genres/{id}',[GenreController::class,'show'])->name('genres.show');

// ranking routes

// Route::resource('rankings', RankingController::class)->except(['show']);
Route::get('/rankings',[RankingController::class,'index'])->name('rankings.index');
Route::get('/rankings/create',[RankingController::class,'create'])->name('rankings.create');
Route::post('/rankings',[RankingController::class,'store'])->name('rankings.store');
Route::get('/rankings/{ranking}/edit',[RankingController::class,'edit'])->name('rankings.edit');
Route::put('/rankings/{ranking}',[RankingController::class,'update'])->name('rankings.update');
Route::delete('/rankings/{id}',[RankingController::class,'destroy'])->name('rankings.destroy');
Route::get('/rankings/{id}',[RankingController::class,'show'])->name('rankings.show');

// novel admin routes

Route::get('/novels',[NovelController::class,'index'])->name('novels.index');
Route::get('/novels/rejected',[NovelController::class,'rejectedNovels'])->name('novels.rejected');
Route::get('/novels/published',[NovelController::class,'publishedNovels'])->name('novels.published');
Route::get('/novels/{id}',[NovelController::class,'showNovel'])->name('novels.show');
Route::post('/novels/{id}/reject',[NovelController::class,'rejectNovel'])->name('novels.reject');
Route::post('/novels/{id}/publish',[NovelController::class,'publishNovel'])->name('novels.publish');

// user admin routes

// Route::resource('users', UserController::class)->except(['show']);

Route::get('/users',[UserController::class,'index'])->name('users.index');
Route::get('/users/admins',[UserController::class,'admins'])->name('users.admins');
Route::get('/users/readers',[UserController::class,'readers'])->name('users.readers');
Route::get('/users/authors',[UserController::class,'authors'])->name('users.authors');
Route::get('/users/create',[UserController::class,'create'])->name('users.create');
Route::post('/users',[UserController::class,'store'])->name('users.store');
Route::get('/users/{user}/edit',[UserController::class,'edit'])->name('users.edit');
Route::put('/users/{user}',[UserController::class,'update'])->name('users.update');
Route::delete('/users/{id}',[UserController::class,'destroy'])->name('users.destroy');
Route::get('/users/{id}',[UserController::class,'show'])->name('users.show');
Route::post('/users/{id}/toggle-admin',[UserController::class,'toggleAdmin'])->name('users.toggle-admin');
Route::post('/users/{id}/toggle-ban',[UserController::class,'toggleBan'])->name('users.toggle-ban');
Route::post('/users/{id}/block-permission',[UserController::class,'blockPermission'])->name('users.block-permission');

// admin chapter routes

// Route::resource('chapters', ChapterController::class)->except(['create','store','update','destroy']);
Route::get('/chapters',[ChapterController::class,'index'])->name('chapters.index');
Route::get('/chapters/rejected',[ChapterController::class,'rejectedChapters'])->name('chapters.rejected');
Route::get('/chapters/published',[ChapterController::class,'publishedChapters'])->name('chapters.published');
Route::get('/chapters/{id}',[ChapterController::class,'show'])->name('chapters.show');
Route::post('/chapters/{id}/reject',[ChapterController::class,'rejectChapter'])->name('chapters.reject');
Route::post('/chapters/{id}/publish',[ChapterController::class,'publishChapter'])->name('chapters.publish');



// Author routes for novels and chapters and profile and settings and dashboard

// author dashboard 

Route::get('/author/dashboard',[DashboardController::class,'index'])->name('author.dashboard');

// author novels routes

Route::get('/author/novels/{id}/edit',[AuthorNovelController::class,'edit'])->name('author.novels.edit');
Route::get('/author/novels',[AuthorNovelController::class,'index'])->name('author.novels.index');
Route::get('/author/novels/create',[AuthorNovelController::class,'create'])->name('author.novels.create');
Route::post('/author/novels',[AuthorNovelController::class,'store'])->name('author.novels.store');
Route::get('/author/novels/{id}',[AuthorNovelController::class,'show'])->name('author.novels.show');
Route::put('/author/novels/{id}',[AuthorNovelController::class,'update'])->name('author.novels.update');
Route::delete('/author/novels/{id}',[AuthorNovelController::class,'destroy'])->name('author.novels.destroy');

Route::get('/author/novels/trash',[AuthorNovelController::class,'trash'])->name('author.novels.trash');
Route::post('/author/novels/{novel}/restore',[AuthorNovelController::class,'restore'])->name('author.novels.restore');
Route::post('/author/novels/{novel}/force-delete',[AuthorNovelController::class,'forceDelete'])->name('author.novels.force-delete');

// chapter routes
Route::get('/author/novels/{novel}/chapters',[AuthorNovelController::class,'chapters'])->name('author.novels.chapters');
Route::get('/author/novels/{novel}/chapters/create',[AuthorNovelController::class,'createChapter'])->name('author.novels.chapters.create');
Route::post('/author/novels/{novel}/chapters',[AuthorNovelController::class,'storeChapter'])->name('author.novels.chapters.store');
Route::get('/author/novels/{novel}/chapters/{chapter}',[AuthorNovelController::class,'showChapter'])->name('author.novels.chapters.show');
Route::get('/author/novels/{novel}/chapters/{chapter}/edit',[AuthorNovelController::class,'editChapter'])->name('author.novels.chapters.edit');
Route::put('/author/novels/{novel}/chapters/{chapter}',[AuthorNovelController::class,'updateChapter'])->name('author.novels.chapters.update');
Route::delete('/author/novels/{novel}/chapters/{chapter}',[AuthorNovelController::class,'destroyChapter'])->name('author.novels.chapters.destroy');