<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('g-homepage');
});

Route::get('/homepage', function () {
    return view('g-homepage');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.post');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/ourhouse', function () {
    return view('c-ourhouse');
});

Route::get('/ourhousedetails', function () {
    return view('c-ourhousedetails');
});

Route::get('/ouragent', function () {
    return view('c-ouragent');
});

Route::get('/signup', function () {
    return view('g-signup');
});

Route::post('/signup', [SignupController::class, 'store'])->name('signup.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
