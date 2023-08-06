<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/student', [StudentController::class, 'index'])->name('student');
Route::post('/student/save', [StudentController::class, 'save'])->name('student.save');
Route::get('/student/{stu_id}/delete', [StudentController::class, 'delete'])->name('student.delete');
Route::get('/student/{stu_id}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::post('/student/{stu_id}/update', [StudentController::class, 'update'])->name('student.update');

Route::get('/student/{stu_id}/manage', [StudentController::class, 'viewRecord'])->name('student.manage');
Route::post('/student/saveRecord', [StudentController::class, 'saveRecord'])->name('student.saveRecord');
