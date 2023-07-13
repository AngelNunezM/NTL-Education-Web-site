<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;


Route::get('', [HomeController::class,'index'])->name('admin.index');
Route::get('Cursos', [HomeController::class,'CursosAproved'])->name('admin.cursos');


