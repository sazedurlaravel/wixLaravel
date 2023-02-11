<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\ProductController;



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

Route::post('register', [AdminController::class, 'register']);
Route::post('login', [AdminController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('get-user', [AdminController::class, 'userInfo']);
    Route::post('logout', [AdminController::class, 'logout']);
// Route::resource('products', [ProductController::class]);

});

Route::post("/create",[ProductController::class,"store"]);

