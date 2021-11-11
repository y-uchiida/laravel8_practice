<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){ return (redirect('/student')); });

/* students に関するルーティング */
Route::get('/student', [StudentControoler::class, 'index'])->name('student');
Route::get('/student/add', [StudentControoler::class, 'add']);
Route::post('/student/add', [StudentControoler::class, 'create']);
Route::post('/student/{id}', [StudentControoler::class, 'update']);
Route::delete('/student/{id}', [StudentControoler::class, 'delete']);
Route::get('/student/{id}', [StudentControoler::class, 'edit']);

/* teachers に関するルーティング */
Route::get('/teacher', [TeacherControoler::class, 'index'])->name('teachers');
Route::get('/teacher/add',[TeacherControoler::class, 'add']);
Route::post('/teacher/add',[TeacherControoler::class, 'create']);
Route::get('/teacher/{id}' ,[TeacherControoler::class, 'edit']);
Route::post('/teacher/{id}' ,[TeacherControoler::class, 'update']);
Route::delete('/teacher/{id}' ,[TeacherControoler::class, 'delete']);

/* subjects に関するルーティング */
Route::get('/subject', [SubjectControoler::class, 'index'])->name('subjects');
Route::get('/subject/add' ,[SubjectControoler::class, 'add']);
Route::post('/subject/add' ,[SubjectControoler::class, 'create']);
Route::get('/subject/{id}' ,[SubjectControoler::class, 'edit']);
Route::post('/subject/{id}' ,[SubjectControoler::class, 'update']);
Route::delete('/subject/{id}' ,[SubjectControoler::class, 'delete']);

/* homeromes に関するルーティング */
Route::get('/homeroom', [HomeroomControoler::class, 'index'])->name('homerooms');
Route::get('/homeroom/add' ,[HomeroomControoler::class, 'add']);
Route::post('/homeroom/add' ,[HomeroomControoler::class, 'create']);
Route::get('/homeroom/{id}' ,[HomeroomControoler::class, 'edit']);
Route::post('/homeroom/{id}' ,[HomeroomControoler::class, 'update']);
Route::delete('/homeroom/{id}' ,[HomeroomControoler::class, 'delete']);

require __DIR__.'/auth.php';
