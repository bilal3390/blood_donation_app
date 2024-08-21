<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DonorController::class, 'index']);   // List all donors
Route::get('/donors/create', [DonorController::class, 'create']);   // Show form to add a new donor
Route::post('/donors', [DonorController::class, 'store']);  // Save new donor
Route::get('/donors/{id}', [DonorController::class, 'show']);  // Show a specific donor's details
