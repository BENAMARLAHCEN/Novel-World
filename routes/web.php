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
use App\Http\Controllers\Author\ChapterController as AuthorChapterController;
use App\Http\Controllers\Author\DashboardController;
use App\Http\Controllers\Author\NovelController as AuthorNovelController;
use App\Http\Controllers\ProfileController;
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
    return view('home');
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
Route::get('/roles',[RoleController::class,'index'])->name('roles.index')->middleware('auth','role:admin');
Route::get('/roles/create',[RoleController::class,'create'])->name('roles.create')->middleware('auth','role:admin');
Route::post('/roles',[RoleController::class,'store'])->name('roles.store')->middleware('auth','role:admin');
Route::get('/roles/{id}/edit',[RoleController::class,'edit'])->name('roles.edit')->middleware('auth','role:admin');
Route::put('/roles/{id}',[RoleController::class,'update'])->name('roles.update')->middleware('auth','role:admin');
Route::delete('/roles/{id}',[RoleController::class,'destroy'])->name('roles.destroy')->middleware('auth','role:admin');
Route::get('/roles/{id}',[RoleController::class,'show'])->name('roles.show')->middleware('auth','role:admin');


// status routes

// Route::resource('genres', GenreController::class)->except(['show'])->middleware('auth','role:admin');
Route::get('/genres',[GenreController::class,'index'])->name('genres.index')->middleware('auth','role:admin');
Route::get('/genres/create',[GenreController::class,'create'])->name('genres.create')->middleware('auth','role:admin');
Route::post('/genres',[GenreController::class,'store'])->name('genres.store')->middleware('auth','role:admin');
Route::get('/genres/{genres}/edit',[GenreController::class,'edit'])->name('genres.edit')->middleware('auth','role:admin');
Route::put('/genres/{genres}',[GenreController::class,'update'])->name('genres.update')->middleware('auth','role:admin');
Route::delete('/genres/{id}',[GenreController::class,'destroy'])->name('genres.destroy')->middleware('auth','role:admin');
Route::get('/genres/{id}',[GenreController::class,'show'])->name('genres.show')->middleware('auth','role:admin');

// ranking routes

// Route::resource('rankings', RankingController::class)->except(['show'])->middleware('auth','role:admin');
Route::get('/rankings',[RankingController::class,'index'])->name('rankings.index')->middleware('auth','role:admin');
Route::get('/rankings/create',[RankingController::class,'create'])->name('rankings.create')->middleware('auth','role:admin');
Route::post('/rankings',[RankingController::class,'store'])->name('rankings.store')->middleware('auth','role:admin');
Route::get('/rankings/{ranking}/edit',[RankingController::class,'edit'])->name('rankings.edit')->middleware('auth','role:admin');
Route::put('/rankings/{ranking}',[RankingController::class,'update'])->name('rankings.update')->middleware('auth','role:admin');
Route::delete('/rankings/{id}',[RankingController::class,'destroy'])->name('rankings.destroy')->middleware('auth','role:admin');
Route::get('/rankings/{id}',[RankingController::class,'show'])->name('rankings.show')->middleware('auth','role:admin');

// novel admin routes

Route::get('/novels',[NovelController::class,'index'])->name('novels.index')->middleware('auth','role:admin');
Route::get('/novels/rejected',[NovelController::class,'rejectedNovels'])->name('novels.rejected')->middleware('auth','role:admin');
Route::get('/novels/published',[NovelController::class,'publishedNovels'])->name('novels.published')->middleware('auth','role:admin');
Route::get('/novels/{id}',[NovelController::class,'showNovel'])->name('novels.show')->middleware('auth','role:admin');
Route::post('/novels/{id}/reject',[NovelController::class,'rejectNovel'])->name('novels.reject')->middleware('auth','role:admin');
Route::post('/novels/{id}/publish',[NovelController::class,'publishNovel'])->name('novels.publish')->middleware('auth','role:admin');

// user admin routes

// Route::resource('users', UserController::class)->except(['show'])->middleware('auth','role:admin');

Route::get('/users',[UserController::class,'index'])->name('users.index')->middleware('auth','role:admin');
Route::get('/users/admins',[UserController::class,'admins'])->name('users.admins')->middleware('auth','role:admin');
Route::get('/users/readers',[UserController::class,'readers'])->name('users.readers')->middleware('auth','role:admin');
Route::get('/users/authors',[UserController::class,'authors'])->name('users.authors')->middleware('auth','role:admin');
Route::get('/users/create',[UserController::class,'create'])->name('users.create')->middleware('auth','role:admin');
Route::post('/users',[UserController::class,'store'])->name('users.store')->middleware('auth','role:admin');
Route::get('/users/{user}/edit',[UserController::class,'edit'])->name('users.edit')->middleware('auth','role:admin');
Route::put('/users/{user}',[UserController::class,'update'])->name('users.update')->middleware('auth','role:admin');
Route::delete('/users/{id}',[UserController::class,'destroy'])->name('users.destroy')->middleware('auth','role:admin');
Route::get('/users/{id}',[UserController::class,'show'])->name('users.show')->middleware('auth','role:admin');
Route::post('/users/{id}/toggle-admin',[UserController::class,'toggleAdmin'])->name('users.toggle-admin')->middleware('auth','role:admin');
Route::post('/users/{id}/toggle-ban',[UserController::class,'toggleBan'])->name('users.toggle-ban')->middleware('auth','role:admin');
Route::post('/users/{id}/block-permission',[UserController::class,'blockPermission'])->name('users.block.permission')->middleware('auth','role:admin');

// admin chapter routes

// Route::resource('chapters', ChapterController::class)->except(['create','store','update','destroy'])->middleware('auth','role:admin');
Route::get('/chapters',[ChapterController::class,'index'])->name('chapters.index')->middleware('auth','role:admin');
Route::get('/chapters/rejected',[ChapterController::class,'rejectedChapters'])->name('chapters.rejected')->middleware('auth','role:admin');
Route::get('/chapters/published',[ChapterController::class,'publishedChapters'])->name('chapters.published')->middleware('auth','role:admin');
Route::get('/chapters/{id}',[ChapterController::class,'show'])->name('chapters.show')->middleware('auth','role:admin');
Route::post('/chapters/{id}/reject',[ChapterController::class,'rejectChapter'])->name('chapters.reject')->middleware('auth','role:admin');
Route::post('/chapters/{id}/publish',[ChapterController::class,'publishChapter'])->name('chapters.publish')->middleware('auth','role:admin');



// Author routes for novels and chapters and profile and settings and dashboard

// author dashboard 

Route::get('/author/dashboard',[DashboardController::class,'index'])->name('author.dashboard')->middleware('auth','role:author');

// author novels routes

Route::get('/author/novels/{id}/edit',[AuthorNovelController::class,'edit'])->name('author.novels.edit')->middleware('auth','role:author');
Route::get('/author/novels',[AuthorNovelController::class,'index'])->name('author.novels.index')->middleware('auth','role:author');
Route::get('/author/novels/create',[AuthorNovelController::class,'create'])->name('author.novels.create')->middleware('auth','role:author');
Route::post('/author/novels',[AuthorNovelController::class,'store'])->name('author.novels.store')->middleware('auth','role:author');
Route::get('/author/novels/{id}',[AuthorNovelController::class,'show'])->name('author.novels.show')->middleware('auth','role:author');
Route::put('/author/novels/{id}',[AuthorNovelController::class,'update'])->name('author.novels.update')->middleware('auth','role:author');
Route::delete('/author/novels/{id}',[AuthorNovelController::class,'destroy'])->name('author.novels.destroy')->middleware('auth','role:author');

Route::get('/author/novels/trash/list',[AuthorNovelController::class,'trash'])->name('author.novels.trash')->middleware('auth','role:author');
Route::post('/author/novels/{id}/restore',[AuthorNovelController::class,'restore'])->name('author.novels.restore')->middleware('auth','role:author');
Route::delete('/author/novels/{id}/force-delete',[AuthorNovelController::class,'forceDelete'])->name('author.novels.force-delete')->middleware('auth','role:author');

// chapter routes
Route::get('/author/novels/{id}/chapters',[AuthorChapterController::class,'chapters'])->name('author.novels.chapters')->middleware('auth','role:author');
Route::get('/author/novels/{id}/chapters/create',[AuthorChapterController::class,'createChapter'])->name('author.novels.chapters.create')->middleware('auth','role:author');
Route::post('/author/novels/{id}/chapters',[AuthorChapterController::class,'storeChapter'])->name('author.novels.chapters.store')->middleware('auth','role:author');
Route::get('/author/novels/{id}/chapters/{chapterId}',[AuthorChapterController::class,'showChapter'])->name('author.novels.chapters.show')->middleware('auth','role:author');
Route::get('/author/novels/{id}/chapters/{chapterId}/edit',[AuthorChapterController::class,'editChapter'])->name('author.novels.chapters.edit')->middleware('auth','role:author');
Route::put('/author/novels/{id}/chapters/{chapterId}',[AuthorChapterController::class,'updateChapter'])->name('author.novels.chapters.update')->middleware('auth','role:author');
Route::delete('/author/novels/{id}/chapters/{chapterId}',[AuthorChapterController::class,'destroyChapter'])->name('author.novels.chapters.destroy')->middleware('auth','role:author');

// author profile routes

Route::get('/dashboard/profile',[ProfileController::class,'profile'])->name('profile')->middleware('auth','role:admin|author');
Route::put('/dashboard/profile',[ProfileController::class,'updateProfile'])->name('profile.update')->middleware('auth','role:admin');
Route::put('/dashboard/profile/password',[ProfileController::class,'updatePassword'])->name('profile.password')->middleware('auth','role:admin');
Route::put('/dashboard/profile/info',[ProfileController::class,'updateInfo'])->name('profile.info')->middleware('auth','role:admin');
Route::put('/dashboard/profile/social',[ProfileController::class,'updateSocial'])->name('profile.social')->middleware('auth','role:admin');
Route::delete('/dashboard/profile',[ProfileController::class,'deleteAccount'])->name('profile.delete')->middleware('auth','role:admin');
