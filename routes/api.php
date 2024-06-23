<?php

use App\Http\Controllers\API\ApiBukuController;
use App\Http\Controllers\API\ApiDataUserController;
use App\Http\Controllers\API\ApiSessionConntroller;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/testingajah', function (Request $request) {
    return 'ini adalah api';
});

// Untuk mendapatkan data buku
Route::get('/perpus/buku', [ApiBukuController::class, 'index'])->name('/perpusbuku');
Route::get('/detailbuku/{id}', [ApiBukuController::class, 'details'])->name('/detailbuku');

//Untuk proses login
Route::get('/loginproses', [ApiSessionConntroller::class, 'login_proses'])->name('/loginproses');
Route::get('/logoutproses', [ApiSessionConntroller::class, 'logout'])->name('/logoutproses');

