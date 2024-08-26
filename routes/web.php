<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// 必要ないのでコメントアウト
/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [PagesController::class, 'getHome']);
Route::get('/tokuteisyoutorihiki', [PagesController::class, 'gettokuteisyoutorihiki']);
Route::get('/privacypolicy', [PagesController::class, 'getprivacypolicy']);
Route::get('/riyoukiyaku', [PagesController::class, 'getriyoukiyaku']);
require __DIR__.'/auth.php';
