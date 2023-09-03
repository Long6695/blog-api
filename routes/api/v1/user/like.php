<?php

use App\Http\Controllers\Api\LikeController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Like'], function () {
    Route::post('/like', [LikeController::class, 'like']);
    Route::delete('/unlike', [LikeController::class, 'unlike']);
});
