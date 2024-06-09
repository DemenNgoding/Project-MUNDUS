<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'get_login'])->name('login');

Route::post('/login', [AuthController::class, 'post_login']);

Route::get('/register', [AuthController::class, 'get_register'])->name('register');

Route::post('/register', [AuthController::class,'post_register']);

// Route::get('/email/verify/need-verification', [VerificationController::class,'notice'])->middleware('auth')->name('verification.notice');

// Route::get('/email/verify/{id}/{hash}', [VerificationController::class,'verify'])->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/profile/{user_id}', [ProfileController::class, 'show'])->name('profile.show');

// Route::resource('profile', ProfileController::class) -> only('show', 'edit', 'update') -> middleware('auth');

Route::get('/edit/{user_id}', [ProfileController::class, 'edit'])->name('profile.edit');

Route::get('/home', function () {
    return view('home');
})->name('home');