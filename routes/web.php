<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\postsController;
use App\Models\post;



Route::get('/', function () {
    return view('index');
});

route::get('/data', [DataController::class, 'index']);
route::get('/create', [DataController::class, 'kami']);
route::post('/student', [DataController::class, 'store']);
route::delete('/hapus/{id}', [DataController::class, 'destroy']);
route::get('/edit/{id}', [DataController::class, 'edit']);
route::post('/update', [DataController::class, 'update']);

// user_login
route::get('/registrasi', [RegistrasiController::class, 'home']);
route::get('/masuk', [RegistrasiController::class, 'create']);
route::post('/registrasi', [RegistrasiController::class, 'store']);
route::get('/form', [RegistrasiController::class, 'index']);


route::get('/login', [LoginController::class, 'index'])->middleware('guest');
route::get('/logout', [LoginController::class, 'index'])->middleware('guest');
route::post('/login', [LoginController::class, 'authenticate']);
route::post('/logout', [LoginController::class, 'logout']);

route::get('/input', function () {
    return view('main');
})->middleware('guest');

route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
route::get('/home', [LoginController::class, 'home']);
route::get('/profile', [LoginController::class, 'profile'])->middleware('auth');
route::get('/auth/google', [GoogleController::class, 'redirectTogoogle']);
route::get('/auth/google/callback', [GoogleController::class, 'HandleGoogleCallback']);

route::get('/deni', function () {
    return view('deni');
});

route::get('/login', function () {
    return view('signin.form');
});


Route::get('/search', [DataController::class, 'index'])->name('search');

Route::get('/blog', [postscontroller::class, 'index']);
Route::get('/artikel/{post}', [postscontroller::class, 'slug']);