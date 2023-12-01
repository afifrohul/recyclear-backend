<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\DocumentationApiController;

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
    return redirect('/login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/back-dashboard', [DashboardController::class, 'index'])->name('back-dashboard');

Route::get('/artikel', [ArticleController::class, 'index']);
Route::post('/artikel/new', [ArticleController::class, 'store']);
Route::post('/artikel/edit/{article}', [ArticleController::class, 'edit']);
Route::put('/artikel/update/{article}', [ArticleController::class, 'update']);
Route::delete('/artikel/destroy/{article}', [ArticleController::class, 'destroy']);

Route::get('/tag', [TagController::class, 'index']);
Route::post('/tag/new', [TagController::class, 'store']);
Route::post('/tag/edit/{tag}', [TagController::class, 'edit']);
Route::put('/tag/update/{tag}', [TagController::class, 'update']);
Route::delete('/tag/destroy/{tag}', [TagController::class, 'destroy']);

Route::get('/documentation-api', [DocumentationApiController::class, 'index']);

require __DIR__.'/auth.php';
