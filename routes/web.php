<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\SessionController;
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


// Buku
Route::get('/buku', [BukuController::class, 'index'])->name('buku');
Route::get('/buku/tambah-data', [BukuController::class,'add'])->name('buku/tambah-data');
Route::post('/buku/store', [BukuController::class,'store'])->name('buku/store');
Route::get('/buku/{id}/edit', [BukuController::class,'edit']);
Route::put('/buku/{id}', [BukuController::class,'update'])->name('buku/{id}');
Route::get('buku/{id}', [BukuController::class, 'destroy']);
// View edit buku
Route::get('/edit-buku', function () {return view('buku.editbuku');});
// Melihat buku di user
Route::get('/perpus/buku', [BukuController::class, 'showbuku']);
// Melihat detail buku
Route::get('/detail/buku/{id}', [BukuController::class, 'detailbuku']);


// Halaman dashboard
// Fungsi middleware('auth') digunakan untuk memproteksikan semua pengguna agar tidak bisa langsung masuk melainkan harus login terlebih dahulu

// Route::group(['middleware' => ['role:petugas']], function () {
//     Route::get('/dashboard/admin', [AdminController::class,'index'])->name('dashboard/admin');
// });

Route::get('/dashboard/admin', [AdminController::class,'index'])->name('dashboard/admin')->middleware('auth');
// Halaman profile
Route::get('/halaman-profile', function () {
    return view('profile.profiles');
});

// Halaman login
Route::get('/login', [SessionController::class,'index'])->name('login');
Route::post('/login-proses', [SessionController::class,'login_proses'])->name('login-proses');
Route::get('/logout', [SessionController::class,'logout'])->name('logout');

// Halaman register
Route::get('/register', [SessionController::class, 'register'])->name('register');
Route::post('/register-proses', [SessionController::class,'register_proses'])->name('register-proses');

// Data peminjaman
Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman');

// Data pengembalian
Route::get('/pengembalian', [PengembalianController::class, 'index'])->name('pengembalian');



Route::get('/data/admin', function () {
    return view('admin.layoutadmin');
}
);



Route::get('/data/petugas', function () {
    return view('petugas.layoutpetugas');
}
);
Route::get('/data/user', function () {
    return view('user.layoutuser');
}
);
Route::get('/data/user', function () {
    return view('user.layoutuser');
}
);
Route::get('/data/petugas', function () {
    return view('petugas.layoutpetugas');
}
);
Route::get('/infowebsite', function () {
    return view('infowebsite');
}
);










// Route::apiResource('kategori', [KategoriController::class]);





Route::get('/edit', function () {
    return view('kategori.edit');
});
