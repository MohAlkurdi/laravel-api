<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Public routes
Route::get("/products", [ProductController::class, "index"]);
Route::get("/products/{id}", [ProductController::class, "show"]);
Route::get("/products/search/{name}", [ProductController::class, "search"]);
// Auth routes
Route::post("/register", [AuthController::class, 'register']);
Route::post("/login", [AuthController::class, "login"]);
// Protected routes
Route::post("/products", [ProductController::class, "store"])->middleware('auth:sanctum');
Route::put("/products/{id}", [ProductController::class, "update"])->middleware('auth:sanctum');
Route::delete("/products/{id}", [ProductController::class, "destroy"])->middleware('auth:sanctum');
Route::post("/logout", [AuthController::class, "logout"])->middleware('auth:sanctum');
