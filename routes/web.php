<?php

use App\Http\Controllers\DBFacadeSample1Controller;
use App\Http\Controllers\DBFacadeSample2Controller;

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

Route::get('/', function () {
    return view('welcome');
});


/* DBファサードのテスト */
Route::get("/DBFacade_test", [DBFacadeSample1Controller::class, 'index']);
Route::get("/DBFacade_test/{id?}", [DBFacadeSample1Controller::class, 'detail']);

/* クエリビルダのテスト */
Route::get("/queryBuilderTest", [DBFacadeSample2Controller::class, 'index']);
Route::get("/queryBuilderTest/{id?}", [DBFacadeSample2Controller::class, 'detail']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
