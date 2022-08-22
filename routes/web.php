<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\MahasiswaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa',function(){
    echo 'Ini Mahasiswa';
});

Route::get('/mahasiswa/rpl/ubg',function(){
    echo 'Ini Mahasiswa RPL Kampus UBG';
});


// Route Menggunakan Parameter
Route::get('/mahasiswa/rpl/ubg/{semester}/{nim}',function($semester, $nim){
    echo 'Ini Mahasiswa RPL Kampus UBG dengan NIM : ' . $nim . ', '.' Semester : '. $semester;
});


// Route dengan Redirect
Route::redirect('/login','/masuk');


// Route Group
Route::group(['prefix' => '/admin'], function(){
    Route::get('/mahasiswa', function(){
        return 'Admin Mahasiswa';
    });
    Route::get('/dosen', function(){
        return 'Admin Dosen';
    });
    Route::get('/pegawai', function(){
        return 'Admin Pegawai';
    });
});

Route::view('/pertemuan2','view-pertemuan2');
Route::view('/portofolio','portofolio');

Route::get('/praktikum', [PraktikumController::class, 'index']);
Route::get('/praktikum/kpat', [PraktikumController::class, 'kpat']);


// CRUD DATA
Route::get('/soal', 'App\Http\Controllers\MahasiswaController@index');
Route::get('/soal/tambah', 'App\Http\Controllers\MahasiswaController@create')->name('soal.create');
Route::post('soal/store', 'App\Http\Controllers\MahasiswaController@store')->name('soal.store');
Route::delete('delete/{id}', 'App\Http\Controllers\MahasiswaController@destroy')->name('soal.remove');
Route::get('edit/{soal}', 'App\Http\Controllers\MahasiswaController@edit')->name('soal.edit');
Route::patch('update/{soal}', 'App\Http\Controllers\MahasiswaController@update')->name('soal.update');