<?php

use App\Http\Controllers\Api\CategoryController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Post'], function () {
    Route::get('/category/all', [CategoryController::class, 'index']);
    Route::get('/category/show/{id}', [CategoryController::class, 'show']);
    Route::post('/category/create', [CategoryController::class, 'create']);
    Route::post('/category/update/{id}', [CategoryController::class, 'update']);
    Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy']);
});