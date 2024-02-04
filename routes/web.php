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

Route::get( '/', function () {
    return view( 'welcome' );
} );

Route::get( '/mahasiswa', function () {
    return view( 'universitas.mahasiswa', [ 
        "mahasiswa1" => "dandi setiawan",
        "mahasiswa2" => "Dona",
        "mahasiswa3" => "Hastin ajeng",
        "mahasiswa4" => "bintang",
    ] );
} );

// Agar terlihat rapih
Route::get( '/mahasiswa/rapih', function () {
    $arrayMahasiswa = [ 
        "mahasiswa1" => "dandi setiawan",
        "mahasiswa2" => "Dona",
        "mahasiswa3" => "Hastin ajeng",
        "mahasiswa4" => "bintang",
    ];
    return view( 'universitas.mahasiswa', $arrayMahasiswa );
} );

// mengirim data menggunakan nested array
Route::get( '/mahasiswa/nested_array', function () {
    $arrayMahasiswa = [ "dandi setiawan", "Dona", "Hastin ajeng", "bintang" ];
    return view( 'universitas.mahasiswa_nested', [ "mahasiswa" => $arrayMahasiswa ] );
} );

Route::get( '/mahasiswa/nested_with', function () {
    $arrayMahasiswa = [ "dandi setiawan", "Dona", "Hastin ajeng", "bintang" ];
    return view( 'universitas.mahasiswa_nested' )->with( 'mahasiswa', $arrayMahasiswa );
} );
