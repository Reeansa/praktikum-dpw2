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

Route::get( '/produk', function () {
    $arrayProduk = [ 
        "produk1" => "Televisi",
        "produk2" => "Kipas Angin",
        "produk3" => "Radio"
    ];
    return view( 'produk', $arrayProduk );
} );

// menampilkan latihan.blade.php
Route::get( '/latihan', function () {
    return view( 'latihan');
} );

// menampilkan hasil dari latihan.blade.php
Route::post('/latihan/hasil', function() {
    $arrayNilai = [
        'nilai' => request('nilai'),
    ];
    return view( 'latihan', $arrayNilai );
});