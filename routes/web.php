<?php

use App\Http\Controllers\APIController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/testing', function () {
    return view('test');
});

Route::get('/daftar', function () {
    return view('register');
});

Route::get('/lupa-password', function () {
    return view('forgot-password');
});

Route::get('/admin', function () {
    return view('layouts.layout');
});


// Route::get('/kategori', function () {
//     return view('kategori.index');
// }
// );

// Kategori
Route::get('/kategori', [KategoriController::class,'index'])->name('kategori');
Route::post('/kategori/store', [KategoriController::class,'store'])->name('kategori/store');
Route::get('/kategori/{id}/edit', [KategoriController::class,'edit']);
Route::put('/kategori/{id}', [KategoriController::class,'update']);
Route::get('/kategori/{id}', [KategoriController::class, 'destroy'] );



// Route::apiResource('kategori', [KategoriController::class]);


Route::get('/buku', function () {
    return view('buku.books');
});




Route::get('/edit', function () {
    return view('kategori.edit');
});
