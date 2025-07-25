<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

Route::get('/sejarah', [App\Http\Controllers\SejarahController::class, 'index'])
    ->name('sejarah');

Route::get('/visimisi', [App\Http\Controllers\VisimisiController::class, 'index'])
    ->name('visimisi');

Route::get('/fasilitas', [App\Http\Controllers\FasilitasController::class, 'index'])
    ->name('fasilitas');

    Route::get('/sambutan', [App\Http\Controllers\SambutanController::class, 'index'])
    ->name('sambutan');

    Route::get('/sdm', [App\Http\Controllers\SdmController::class, 'index'])
    ->name('sdm');

    Route::get('/pengumuman', [App\Http\Controllers\PengumumanController::class, 'index'])
    ->name('pengumuman');

    Route::get('/pendaftaran', [App\Http\Controllers\PendaftaranController::class, 'index'])
    ->name('pendaftaran');

    Route::post('/pendaftaran', [App\Http\Controllers\PendaftaranController::class, 'store'])
    ->name('pendaftaran.store');

    Route::get('/pengumuman/{slug}', [App\Http\Controllers\PengumumanController::class, 'show'])
    ->name('pengumuman.show');

    Route::get('/berita/{slug}', [App\Http\Controllers\NewsController::class, 'show'])
    ->name('berita.show');