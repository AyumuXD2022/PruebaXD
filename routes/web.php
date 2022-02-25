<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RepresentativesController;




Route::get('/', [RepresentativesController::class, 'index'])->name('persons.index');
Route::get('persons/create', [RepresentativesController::class, 'create'])->name('persons.create');
Route::post('persons/create', [RepresentativesController::class, 'store'])->name('persons.store');