<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
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

// Route::get('/fakultas', function(){
//     return view('fakultas');
// });

Route::resource('fakultas',FakultasController::class);

// Route::get('/prodi', function(){
//     return view('prodi');
// });

Route::resource('prodi', ProdiController::class);


Route::resource('mahasiswa', MahasiswaController::class);

Route::get('/mahasiswa/{npm}', function($npm){
    $data = [
        [
            "matakuliah" => "Pemrograman Web 2",
            "hari" => "Jumat"
        ],
        [
            "matakuliah" => "Pemrograman Aplikasi Bergerak 1",
            "hari" => "Jumat"
        ]
    ];
    return view('mahasiswa.index')->with('npm', $npm)->with('jadwal', $data);
});

Route::get('/dosen', function(){
    $data = [
        [
            "kode" => "000001",
            "nama" => "Ahmad"
        ],
        [
            "kode" => "000002",
            "nama" => "Kareem"
        ]
    ];
    return view('dosen.index')->with('data', $data);
});
