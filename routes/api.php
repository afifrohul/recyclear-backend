<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('auth:sanctum')->get('/user', [App\Http\Controllers\API\UserController::class, 'user']);
Route::get('/user', [App\Http\Controllers\API\UserController::class, 'user']);
Route::post('/newUser', [App\Http\Controllers\API\UserController::class, 'newUser']);
// Route::middleware('auth:sanctum')->put('/changeStatusUser/{user}', [App\Http\Controllers\API\UserController::class, 'changeStatusUser']);
Route::put('/changeStatusUser/{user}', [App\Http\Controllers\API\UserController::class, 'changeStatusUser']);

Route::get('/tag', [App\Http\Controllers\API\TagController::class, 'tag']);
Route::get('/article', [App\Http\Controllers\API\ArticleController::class, 'article']);