<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

use App\Http\Controllers\ThreadController;
Route::get( '/thread/{id}', [ThreadController::class, 'index'])->name('thread.index');

use App\Http\Controllers\AddThreadController;
Route::get( '/addthread', [AddThreadController::class, 'index'])->name('addthread.index');

Route::middleware('auth')->group(function () {
    Route::post( '/addthread', [AddThreadController::class, 'store'])->name('addthread.store');
});

use App\Http\Controllers\CommentController;
Route::middleware('auth')->group(function () {
    Route::post('/thread/{id}', [CommentController::class, 'store'])->name('comment.store');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
