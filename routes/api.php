<?php

// use App\Http\Controllers\ExampleController;
use App\Http\Controllers\Api\v1\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Exemplo de middleware
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::prefix('v1')->group(function()
{
	// Route::get('/users', [UserController::class, 'index']);

	Route::apiResource('users', UserController::class);
});

// Route::group(function () {
//     Route::get(
//         'examples',
//         [ExampleController::class, 'index']
//     );
//     Route::post(
//         'example',
//         [ExampleController::class, 'create']
//     );
//     Route::get(
//         'example/{id}',
//         [ExampleController::class, 'show']
//     );
//     Route::put(
//         'example/{id}',
//         [ExampleController::class, 'update']
//     );
//     Route::delete(
//         'example/{id}',
//         [ExampleController::class, 'destroy']
//     );
// });