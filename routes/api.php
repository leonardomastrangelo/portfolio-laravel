<?php

use App\Http\Controllers\Api\PassionController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\TechnologyController;
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

// API projects
Route::get('/projects', [ProjectController::class, 'index']);

// API technologies
Route::get('/technologies', [TechnologyController::class, 'index']);

// API passions
Route::get('/passions', [PassionController::class, 'index']);

