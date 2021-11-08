<?php

use App\Http\Controllers\DogController;
use App\Http\Controllers\OwnerController;

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

/* dogs テーブルに関する操作 */
Route::get('/dog', [DogController::class, 'dog_list']);
Route::get('/dog/{id?}', [DogController::class, 'dog_detail']);

/* owners テーブルに関する操作 */
Route::get('/owner', [OwnerController::class, 'owner_list']);
Route::get('/owner/{id?}', [OwnerController::class, 'owner_detail']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
