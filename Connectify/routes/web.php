<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Signin;
use App\Livewire\Explore;
use App\Livewire\Search;
use App\Livewire\Home;
use App\Livewire\Profile\Home as ProfileHome;
use Illuminate\Support\Facades\Route;

//app routes
Route::get('/', Home::class)->name('home');
Route::post('/', [PostController::class, 'makePost'])->name('post');
Route::get('/profile/{username}', ProfileHome::class)->name('profile');

//auth routes
Route::get('/login', Login::class)->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', Login::class)->name('signin');
Route::post('/register', [LoginController::class, 'register'])->name('signin');


//ajax routes
Route::post('/likePost', [PostController::class, 'toggleLike'])->name('likePost');