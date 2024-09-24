<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\DisenoCurricularController;
use Illuminate\Support\Facades\Route;


Route::get('/',[DisenoCurricularController::class, 'index'])->name('crud.index');