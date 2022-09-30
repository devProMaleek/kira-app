<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
})->name('welcome');

Auth::routes([ 'verify' => true]);



Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::prefix('learn')->group(function () {
        Route::get('/', [App\Http\Controllers\LearnController::class, 'index'])->name('learn');
        Route::get('/show', function () {
            return view('user.learn.show');
        })->name('learn.show');
    });
    Route::get('/session', [App\Http\Controllers\SessionController::class, 'index'])->name('session');
    Route::get('/whisper', [App\Http\Controllers\WhisperController::class, 'index'])->name('whisper');
    Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
    Route::get('/talk', [App\Http\Controllers\ContactController::class, 'talk'])->name('talk');
});