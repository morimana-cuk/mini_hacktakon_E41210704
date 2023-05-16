<?php

use App\Http\Controllers\Pendidikancontroller;
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

Route::prefix('/pendidikan')->group(function(){
    Route::get('/',[Pendidikancontroller::class,'index'])->name('halaman_utama');
    Route::post('/proses',[Pendidikancontroller::class,'create'])->name('proses');
    Route::delete('/{nim}',[Pendidikancontroller::class,'destroy'])->name('hapus');
    Route::get('/{nim}/edit',[Pendidikancontroller::class,'edit'])->name('halaman_edit');
    Route::put('/{nim}',[Pendidikancontroller::class,'update'])->name('proses_update');
});
