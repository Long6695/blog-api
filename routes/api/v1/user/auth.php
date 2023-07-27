<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Auth'], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});
