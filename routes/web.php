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

Route::get('/', [PagesController::class, 'getTop']);
Route::get('/about', [PagesController::class, 'getabout']);
Route::get('/contact', [PagesController::class, 'getcontact']);
Route::get('/tokuteisyoutorihiki', [PagesController::class, 'gettokuteisyoutorihiki']);
Route::get('/privacypolicy', [PagesController::class, 'getprivacypolicy']);
Route::get('/user-agreement', [PagesController::class, 'getriyoukiyaku']);
require __DIR__ . '/auth.php';


// コンタクトフォームページ
Route::get('/contact', function () {
    return view('contact');
});


use App\Http\Controllers\ContactController;

// コンタクトフォームのデータ送信を処理するルート
Route::post('/contact', [ContactController::class, 'store']);
