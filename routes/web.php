<?php

use Illuminate\Support\Facades\Route;

/* 利用するコントローラおよびミドルウェアを読み込みしておく */
use App\Http\Controllers\MiddlewareSampleController;
use App\Http\Controllers\ValidationSampleController;
use App\Http\Controllers\FormRequestSampleController;
use App\Http\Controllers\CookieSample1Controller;
use App\Http\Controllers\CookieSample2Controller;
use App\Http\Middleware\MiddlewareSample1;
use App\Http\Middleware\MiddlewareSample2;

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

/* ミドルウェアの動作確認 */
Route::get('/middleware_sample', [MiddlewareSampleController::class, 'index'])
    ->middleware(MiddlewareSample1::class)  /* 最初のミドルウェア登録 */
    ->middleware(MiddlewareSample2::class); /* 次のミドルウェア登録 */

/* バリデーション動作確認 */
Route::get('/validation_sample', [ValidationSampleController::class,'input']);
Route::post('/validation_sample', [ValidationSampleController::class, 'post']);

/* FormRequestによるバリデーション */
Route::get('/form_request_sample', [FormRequestSampleController::class, 'input']);
Route::post('/form_request_sample', [FormRequestSampleController::class, 'post']);

/* Request/Response オブジェクトを用いたCookieの操作 */
Route::get('/cookie_sample1', [CookieSample1Controller::class, 'input']);
Route::post('/cookie_sample1', [CookieSample1Controller::class, 'post']);

/* Cookie ファサードを用いたCookieの操作 */
Route::get('/cookie_sample2', [CookieSample2Controller::class, 'input']);
Route::post('/cookie_sample2', [CookieSample2Controller::class, 'post']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
