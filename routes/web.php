<?php

use App\Http\Controllers\agendaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/')->group(function () {
    Route::get('/',[agendaController::class,'index'])->name('agenda');
    Route::post('/tambah',[agendaController::class,'tambah'])->name('agenda.tambah');
    Route::delete('/hapus{id}',[agendaController::class,'hapus'])->name('agenda.hapus');
    Route::get('/edit{id}',[agendaController::class,'edit'])->name('agenda.edit');
    Route::post('/update{id}',[agendaController::class,'update'])->name('agenda.update');
});