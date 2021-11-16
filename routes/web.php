<?php

use App\Http\Controllers\TaskController;
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

Route::get('/', [TaskController::class, 'index'])->middleware('auth')->name('Task List');

/* 新規保存 */
Route::get('/task/add', [TaskController::class, 'create'])->middleware('auth')->name('Add Task');
Route::post('/task/add', [TaskController::class, 'store'])->middleware('auth');

/* 編集 */
Route::get('/task/{id?}', [TaskController::class, 'edit'])->middleware('auth');
Route::post('/task/{id?}', [TaskController::class, 'update'])->middleware('auth');

/* 削除 */
Route::get('/task/delete/{id?}', [TaskController::class, 'delete'])->middleware('auth');

/* 完了・未完了の切り替え */
Route::get('/task/toggle_finished/{id?}', [TaskController::class, 'toggle_finished'])->middleware('auth');

require __DIR__.'/auth.php';
