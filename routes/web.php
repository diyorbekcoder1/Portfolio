<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillsController;


Route::get('/', [HomeController::class, 'index'])->name('frontend.port');

Route::group(['middleware' => ['auth:web']], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('limitless');
    Route::resource('skills', SkillsController::class);

});
Route::get('/register', [AuthController::class, 'register_page'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::get('/login', [AuthController::class, 'login_page'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
