<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'get_login'])->name('login');

Route::post('/login', [AuthController::class, 'post_login']);

Route::get('/register', [AuthController::class, 'get_register'])->name('register');

Route::post('/register', [AuthController::class,'post_register']);

Route::get('/createpost', [DashboardController::class, 'create_post'])->name('create_post');

Route::post('/post', [DashboardController::class, 'community_post']);

// Route::get('/email/verify/need-verification', [VerificationController::class,'notice'])->middleware('auth')->name('verification.notice');

// Route::get('/email/verify/{id}/{hash}', [VerificationController::class,'verify'])->middleware(['auth', 'signed'])->name('verification.verify');

// Making sure that you need to be logged in before going to path inside
Route::middleware('auth')->group(function () {

    // Route::resource('profile', ProfileController::class) -> only('show', 'edit', 'update') -> middleware('auth');
    
    });
    
    // Supposed to be inside middleware. Waiting for login to work
    Route::get('/profile/{user_id}', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/{user_id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    


Route::get('/home', function () {
    return view('home');
})->name('home');