<?php

use App\Http\Controllers\AddressController;
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

/* addressの一覧表示用 */
Route::get('/address/list', [AddressController::class, 'index']);

/* addressの追加の画面用 */
Route::get('/address/add', function(){
    return view('add');
});

/* addressの追加処理用 */
Route::post('/address/add', [AddressController::class, 'create']);

/* addressの編集画面用 */
Route::get('/address/edit/{id}', [AddressController::class, 'edit']);

/* addressの更新処理用 */
Route::post('/address/update/{id}', [AddressController::class, 'update']);

/* addressの削除処理用 */
Route::delete('/address/delete/{id}', [AddressController::class, 'delete']);

/**/
