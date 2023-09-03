<?php

use App\Http\Controllers\Api\AuthController;
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


Route::group(['middleware' => 'auth:sanctum'], function () {
    require_once __DIR__ . '/auth.php';
    require_once __DIR__ . '/like.php';
    require_once __DIR__ . '/post.php';
    require_once __DIR__ . '/category.php';
});

Route::group([], function () {
    Route::group(['namespace' => 'Auth'], function () {
        Route::post('/signup', [AuthController::class, 'signup']);
        Route::post('/login', [AuthController::class, 'login']);
    });
});
