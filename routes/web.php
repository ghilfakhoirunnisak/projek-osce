<?php

use App\Http\Controllers\JadwalController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PengujiController;
use App\Http\Controllers\StationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.index');
});

Route::get('/dashboard', function () {return view('admin.dashboard');})->name('dashboard');
Route::resource('mahasiswa', MahasiswaController ::class);
Route::resource('penguji', PengujiController ::class);
Route::resource('station', StationController ::class);
Route::resource('jadwal', JadwalController ::class);
