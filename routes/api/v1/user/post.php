<?php

use App\Http\Controllers\Api\PostController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Post'], function () {
    Route::get('/post/all', [PostController::class, 'index']);
    Route::get('/post/show/{id}', [PostController::class, 'show']);
    Route::post('/post/create', [PostController::class, 'create']);
    Route::post('/post/update/{id}', [PostController::class, 'update']);
    Route::delete('/post/delete/{id}', [PostController::class, 'destroy']);
});