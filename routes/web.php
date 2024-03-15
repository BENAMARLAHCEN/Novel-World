<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\VerifyController;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

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
