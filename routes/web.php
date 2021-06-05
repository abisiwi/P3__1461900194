<?php

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


Route::get('/', [App\Http\Controllers\kegiatan3::class, 'index0194'])->name('index0194');

Route::get('/{id}', [App\Http\Controllers\kegiatan3::class, 'edit0194'])->name('edit0194');

Route::post('/edit/{id}', [App\Http\Controllers\kegiatan3::class, 'update0194'])->name('update0194');

Route::get('/tambah/dokter', [App\Http\Controllers\kegiatan3::class, 'tambah0194'])->name('tambah0194');

Route::post('/tambah/dokter/store', [App\Http\Controllers\kegiatan3::class, 'store0194'])->name('store0194');

Route::get('/hapus/{id}', [App\Http\Controllers\kegiatan3::class, 'hapus0194'])->name('hapus0194');