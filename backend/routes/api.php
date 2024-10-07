<?php

use App\Http\Controllers\API\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
// YOU CAN FIND ALL THESE FILE ON HTTP/COTROLLERS/API


// ENDPOINT FOR GET ALL DATA 
Route::get('/categories', [CategoryController::class, 'index']);

// ENDPOINT FOR GET SPECIFIC DATA
Route::get('/categories/{id}', [CategoryController::class, 'show']);

// ENDPOINT FOR POST SPECIFIC DATA
Route::post('/categories', [CategoryController::class, 'store']);
