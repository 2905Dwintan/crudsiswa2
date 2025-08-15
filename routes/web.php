<?php

use App\Http\Controllers\ClasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/', [SiswaController::class, 'index']);

Route::get('/siswa/create', [SiswaController::class, 'create']);

Route::post('/siswa/store', [SiswaController::class, 'store']);

Route::get('/siswa/delete/{id}',[SiswaController::class,'destroy']);

Route::get('/siswa/show/{id}',[SiswaController::class,'show']);

Route::get('/siswa/edit/{id}',[SiswaController::class,'edit']);

Route::post('/siswa/update/{id}', [SiswaController::class, 'update']);

//route

Route::get('/kelas', [ClasController::class, 'index']);

Route::get('/kelas/create', [ClasController::class, 'create']);

Route::post('/kelas/store', [ClasController::class, 'store']);

Route::get('/kelas/delete/{id}',[ClasController::class,'destroy']);

Route::get('/kelas/show/{id}',[ClasController::class,'show']);

Route::get('/kelas/edit/{id}',[ClasController::class,'edit']);

Route::post('/kelas/update/{id}', [ClasController::class, 'update']);














