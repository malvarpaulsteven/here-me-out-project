<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiaryController;
// use Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/question', function () {
    return view('pages.question');
});

Route::get('/dashboard', function () {
    if (Auth::guest()) {
        return redirect()->route('login')->with('error', 'You need to register before you can access this page.');
    }
    return view('pages.dashboard');
});

Auth::routes();

// Route::resource('/diary', DiaryController::class);
// Route::resource('/diary/create', DiaryController::class);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('diary')->group(function () {
    Route::get('/', [DiaryController::class, 'index']);
    Route::get('/create', [DiaryController::class, 'create']);
    Route::get('/update/{id}', [DiaryController::class, 'updateView']);
    Route::post('/create-diary', [DiaryController::class, 'store']);
    Route::post('/update-diary', [DiaryController::class, 'updateDiary']);
    Route::post('/delete-diary', [DiaryController::class, 'destroy']);
});
