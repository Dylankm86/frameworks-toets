<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/person', [PersonController::class, 'index'])->name('person.index');
Route::get('/person/create', [PersonController::class, 'create'])->name('person.create');
Route::post('/person', [PersonController::class, 'store'])->name('person.store');
Route::get('/person/{person}/edit', [PersonController::class, 'edit'])->name('people.edit');
Route::put('/person/{person}/update', [PersonController::class, 'update'])->name('person.update');
Route::delete('/person/{person}', [PersonController::class, 'destroy'])->name('people.destroy');

