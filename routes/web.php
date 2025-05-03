<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa/{nama}', function ($nama) {
    return "Nama mahasiswa : " . $nama;
});

Route::get('/stok_barang/{benda}/{merk}', function ($benda, $merk) {
    return "Stok barang untuk : " . $benda . " " . $merk;
});

Route::get('/stok_barang/{benda?}/{merk?}', function ($benda = 'Nokia', $merk = 'Nokia') {
    return "Stok barang untuk : " . $benda . " " . $merk;
});

Route::get('/user/{id}', function ($id) {
    return "Tampilkan User Id : " . $id;
})->where('id','[0-9]+');

Route::get('/user/{id?}', function ($id) {
    return "Tampilkan User Id : " . $id;
})->where('id','^[A-Z{2}0-9]+');


