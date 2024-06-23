<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DataPeminjamanController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\VerifikasiController;
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

Route::get('/dashboard', [VerifikasiController::class,'index'])->name('dashboard')->middleware('auth');
// Halaman profile
Route::get('/halaman-profile', function () {
    return view('profile.profiles');
});


Route::get('admin-page', function() {
    return 'Halaman untuk Admin';
})->middleware('role:admin')->name('admin.page');




// Halaman login
Route::get('/login', [SessionController::class,'index'])->name('login');
Route::post('/login-proses', [SessionController::class,'login_proses'])->name('login-proses');
Route::get('/logout', [SessionController::class,'logout'])->name('logout');

// Halaman register
Route::get('/register', [SessionController::class, 'register'])->name('register');
Route::post('/register-proses', [SessionController::class,'register_proses'])->name('register-proses');

// Histori yang akan dlihat oleh pengguna (user)
Route::get('/histori', [DataPeminjamanController::class,'index'])->name('/histori');




// Data peminjaman
Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman');
Route::post('/peminjaman-proses', [PeminjamanController::class, 'store'])->name('peminjaman-proses');
Route::get('/peminjaman/{id}', [PeminjamanController::class, 'delete'])->name('peminjaman/{id}');






// Data pengembalian
Route::get('/pengembalian', [PengembalianController::class, 'index'])->name('pengembalian');

// Data user yang terdiri dari admin, petugas, dan user itu sendiri
Route::get('/data/admin', [DataUserController::class, 'index'])->name('/data/admin');
// Edit data user (admin)
Route::get('/data/admin/{id}/edit', [DataUserController::class, 'edit_data']);
// Update data user (admin)
Route::put('/data/admin/{id}', [DataUserController::class,'update_data']);
// Hapus data user (admin)
Route::get('/data/admin/{id}', [DataUserController::class, 'hapus_data'] );
// Yang untuk mebghapus data dan mengupdate data masih ada bug pada bagian route nya. anomali routenya itu bernama "data" padahal "data" ini seharusnya ada didalam masing function di datausercontroller

// // Role admin
// Route::group(['middleware' => ['role:admin']], function () {
//     Route::get('/dashboard', [VerifikasiController::class, 'index'])->name("dashboard");
//     // tambahkan route lain yang membutuhkan peran admin
// });


// // Role petugas
// Route::group(['middleware' => ['role:petugas']], function () {
//     Route::get('/dashboard', [VerifikasiController::class, 'index'])->name("dashboard");
// });

// // Role user
// Route::group(['middleware' => ['role:user']], function () {
//     Route::get('/dashboard', [VerifikasiController::class, 'index'])->name("dashboard");
// });

// Peminjaman



















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
