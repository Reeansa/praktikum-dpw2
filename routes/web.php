<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// membuat route
Route::get( '/beranda', function () {
    return 'Halaman Beranda';
} );

// Route parameter
Route::get( '/kendaraan/{jenis}', function ($jenis) {
    return "Tampilkan data kendaraan dengan jenis $jenis";
} );

// Route dengan optional parameter
Route::get('/kendaraan/{$a}/{$b}', function ($a = 'motor', $b = 'honda') {
        return "Cek harga kendaraan $a $b";
    }
);

// Route parameter dengan regular expression
Route::get( '/product/{$id}', function ($id) {
    return "Tampilkan product dengan id = $id";
} );

// Route parameter dengan regular expression (hanya angka)
Route::get( '/product/{$id}', function ($id) {
    return "Tampilkan product dengan id = $id";
} )->where( 'id', '[0-9]+' );

// Route redirect
Route::get( '/hubungi-kami', function () {
    return '<h1>Hubungi Kami</h1>';
} );
Route::redirect( '/contact-us', '/hubungi-kami' );

// Route group
Route::prefix( '/admin' )->group( function () {
    Route::get( '/dashboard', function () {
        return 'Tampilkan dashboard aplikasi';
    } );
    Route::get( '/datapegawai', function () {
        return 'Tampilkan data pegawai';
    } );
    Route::get( '/datamahasiswa', function () {
        return 'Tampilkan data mahasiswa';
    } );
} );

// Route fallback
Route::fallback( function () {
    return "Maaf, alamat tidak ditemukan";
} );

// Route priority (akan mencetak route terakhir)
Route::get( '/baju/1', function () {
    return "Baju ke-1";
} );
Route::get( '/baju/1', function () {
    return "Baju saya ke-1";
} );
Route::get( '/baju/1', function () {
    return "Baju kita ke-1";
} );

// Route priority (akan mencetak sesuai dengan parameter)
Route::get( '/baju/{a}', function ($a) {
    return "Baju ke-$a";
} );
Route::get( '/baju/{b}', function ($b) {
    return "Baju saya ke-$b";
} );
Route::get( '/baju/{c}', function ($c) {
    return "Baju kita ke-$c";
} );

