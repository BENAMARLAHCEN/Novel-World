<?php

use App\Http\Controllers\Admin\ChapterController;
use App\Http\Controllers\Admin\NovelController;
use App\Http\Controllers\Admin\RankingController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\StatuController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\VerifyController;
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

// Route::resource('statuses', StatuController::class)->except(['show']);
Route::get('/status',[StatuController::class,'index'])->name('status.index');
Route::get('/status/create',[StatuController::class,'create'])->name('status.create');
Route::post('/status',[StatuController::class,'store'])->name('status.store');
Route::get('/status/{status}/edit',[StatuController::class,'edit'])->name('status.edit');
Route::put('/status/{status}',[StatuController::class,'update'])->name('status.update');
Route::delete('/status/{id}',[StatuController::class,'destroy'])->name('status.destroy');
Route::get('/status/{id}',[StatuController::class,'show'])->name('status.show');

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
