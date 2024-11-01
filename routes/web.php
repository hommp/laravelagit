<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'show'])->name('about');
Route::get('/list', [ListController::class, 'show'])->name('list');
Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');

Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/store-signup', [AuthController::class, 'storeSignup'])->name('storeSignup');

Route::get('/signin', [AuthController::class, 'signin'])->name('signin');
Route::post('/store-signin', [AuthController::class, 'storeSignin'])->name('storeSignin');

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->to('/')->with('succes', 'Logout success!');
})->name('logout')->middleware('auth');

Route::resource('users', UserController::class);
