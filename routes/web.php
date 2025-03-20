<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\CheckoutController;


Route::get('/shop', function () {
    return ('Selamat datang di Toko Kami!');
});

// Menampilkan daftar produk
Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');

// Menampilkan detail produk
Route::get('/produk/{id}', [ProdukController::class, 'show'])->name('produk.show');

// Menambahkan produk ke keranjang
Route::post('/keranjang/tambah', [KeranjangController::class, 'tambah'])->name('keranjang.tambah');

// Melihat isi keranjang
Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang.index');

// Menghapus produk dari keranjang
Route::delete('/keranjang/hapus/{id}', [KeranjangController::class, 'hapus'])->name('keranjang.hapus');

// Checkout
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout/proses', [CheckoutController::class, 'proses'])->name('checkout.proses');

Route::get('/', function () {
    return view('web.homepage');
});

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::middleware(['auth'])->group(function () {
//     Route::redirect('settings', 'settings/profile');

//     Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
//     Volt::route('settings/password', 'settings.password')->name('settings.password');
//     Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
// });

// require __DIR__.'/auth.php';
