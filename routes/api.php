<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/posts', function () {
//     return response()->json([
//         'posts' => [
//             ['id' => 1, 'title' => 'First Post'],
//             ['id' => 2, 'title' => 'Second Post'],
//         ],
//     ]);
// });

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
