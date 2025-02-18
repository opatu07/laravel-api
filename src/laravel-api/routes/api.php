<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test-api', function () {
    return response()->json([
        'message' => 'This is a test route for api.php'
    ]);
});
