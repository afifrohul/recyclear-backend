<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::get('/artikel', [ArtikelController::class, 'index']);
Route::post('/artikel/new', [ArtikelController::class, 'store']);
Route::post('/artikel/edit/{artikel}', [ArtikelController::class, 'edit']);
Route::put('/artikel/update/{artikel}', [ArtikelController::class, 'update']);
Route::delete('/artikel/destroy/{artikel}', [ArtikelController::class, 'destroy']);

require __DIR__.'/auth.php';
