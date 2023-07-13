<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Livewire\CourseStatus;
use App\Http\Controllers\UsuariosController;
use App\Http\Livewire\Usuarios\CursosPost;
use App\Http\Controllers\PDFController;
use App\Models\PDF; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class)->name('home');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//route para la gestion del controlador de los cursos
Route::get('cursos', [CourseController::class, 'index'])->name('courses.index');
Route::get('cursos/{course}', [CourseController::class, 'show'])->name('courses.show');
Route::post('cursos/{course}/enrolled', [CourseController::class, 'enrolled'])->middleware('auth')->name('courses.enrolled');
Route::get('curso-estatus/{course}', CourseStatus::class)->name('courses.status');
Route::get('curso/matriculado{user}', [CourseController::class, 'showMyCourse'])->name('Cursos.MyShow');

//route para la visualizacion del perfil
Route::get('profile/{profile}',[UsuariosController::class, 'showProfile'])->name('showProfile');

Route::get('/pdfs/{id}',[PDFController::class, 'download'])->name('pdfs.download');
Route::get('/pdfs/{id}/download', function ($id) {
    $pdf = PDF::findOrFail($id);
    return view('download', compact('pdf'));
});



