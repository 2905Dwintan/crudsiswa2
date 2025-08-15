<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ClasController;

Route::get('/', [SiswaController::class, 'index']);

Route::get('/siswa/create', [SiswaController::class, 'create']);

Route::post('/siswa/store', [SiswaController::class, 'store']);

Route::get('/siswa/delete/{id}',[SiswaController::class,'destroy']);

Route::get('/siswa/show/{id}',[SiswaController::class,'show']);

Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit']);

Route::post('/siswa/update/{id}', [SiswaController::class, 'update']);


Route::get('/kelas', [ClasController::class, 'index'])->name('index');

Route::get('/kelas/create', [ClasController::class, 'create'])->name('create');

Route::get('/kelas/edit/{id}', [ClasController::class, 'edit'])->name('edit');

Route::get('/kelas/show/{id}', [ClasController::class, 'show'])->name('show');

Route::post('/kelas/store', [ClasController::class, 'store'])->name('store');

Route::post('/kelas/update/{id}', [ClasController::class, 'update'])->name('update');

Route::get('/kelas/destroy/{id}', [ClasController::class, 'destroy'])->name('destroy');