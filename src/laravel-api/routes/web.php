<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-web', function () {
    return response()->json([
        'message' => 'This is a test route for web.php'
    ]);
});
