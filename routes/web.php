<?php

use App\Http\Controllers\AuthSampleController;

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

/* ログインしているユーザーのみにアクセスさせたい場合、
 * middleware('auth') で制限ができる
 * 未ログインであれば、ログイン画面へ遷移させる
 */
Route::get('login_only', [AuthSampleController::class, 'login_only'])->middleware('auth');

Route::get('display_user_info', [AuthSampleController::class, 'display_user_info'])->name('display_user_info');

Route::get('my_logout_sample', [AuthSampleController::class, 'my_logout_sample'])->name('my_logout_sample');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
