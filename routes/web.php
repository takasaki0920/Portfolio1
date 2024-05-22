<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

    // ホーム画面へ遷移
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // プロフィール画面へ遷移
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');

    // 学習画面へ遷移
    Route::get('/skill', [App\Http\Controllers\HomeController::class, 'skill'])->name('skill');

    // ポートフォリオ一覧へ遷移
    Route::get('/portfolio', [App\Http\Controllers\HomeController::class, 'portfolio'])->name('portfolio');

    // 詳細画面へ遷移
    // Route::get('/detail', [App\Http\Controllers\HomeController::class, 'detail'])->name('detail');
    
        