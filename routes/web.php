<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RepresentativesController;


Route::get('/', function () {
    return view('index');
});

Route::get('persons', [RepresentativesController::class, 'index'])->name('persons.index');
Route::get('persons/create', [RepresentativesController::class, 'create'])->name('persons.create');