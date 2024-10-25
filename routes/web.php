<?php

use App\Http\Controllers\agendaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[agendaController::class,'index'])->name('agenda');