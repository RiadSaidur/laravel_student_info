<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', [StudentController::class, 'home'])->name('home');
Route::post('/', [StudentController::class, 'saveStudent'])->name('saveStudent');

Route::get('/list', [StudentController::class, 'list'])->name('list');

Route::get('/update/{id}', [StudentController::class, 'update'])->name('update');
Route::post('/update/{id}', [StudentController::class, 'updateStudent'])->name('updateStudent');

Route::post('/remove', [StudentController::class, 'removeStudent'])->name('removeStudent');