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

/* routes/web.php
 * Web ブラウザからのアクセスについて、ルーティングを行う設定ファイル
 * Route::[メソッド]('ルーティングしたいURL', ルーティング処理) の形式で記述する
 * 第二引数には、実際に返される内容になる。関数の実行結果を返すこともできる。
 */

 /* laravelの初期設定。'resources/views/welcome.blade.php' の内容を返している */
Route::get('/', function () {
    return view('welcome');
});

/* 文字列を直接記入する */
Route::get('/routing_sample/test1', function () {
    return ('<h1>/routing_sample/test1</h1><p>Hello, Laravel!!</p>');
});

/* 関数の実行結果を返す */
Route::get('/routing_sample/test2', function () {
    $rand = rand();
    $date = date('l jS \of F Y h:i:s A');
    return (
        "<h1>/routing_sample/test2</h1>". "<p>random: $rand</p>". "<p>date: $date</p>"
    );
});

/* パラメータを与える
 * 第一引数に{パラメータ名}　という形式でURLを記入すると、URLの一部を変数として利用できるようになる
 */
Route::get('/routing_sample/test3/{name}', function ($name) {
    return ("<h1>/routing_sample/test3</h1>". "<p>name: $name</p>" );
});

/* 任意パラメータを設定
 * {パラメータ名?}　という形式にすると、指定したパラメータが無くてもエラーにならない
 */
Route::get('/routing_sample/test4/{name?}', function ($name = '') {
    return ("<h1>/routing_test4</h1>". "<p>name: $name</p>");
});

/* コントローラを呼び出す
 * use で、コントローラの名前空間を読み込んでおく
 * (use use App\Http\Controllers\コントローラ名; など)
 * Route::get('対象URL', [コントローラ名::class, 'アクションメソッド名'])
 */
use App\Http\Controllers\RoutingSampleController; /* 本来は、useはファイルの先頭にまとめて書くのが望ましい */
Route::get('/routing_sample/test5_index/', [RoutingSampleController::class, 'index']);
Route::get('/routing_sample/test5_other/', [RoutingSampleController::class, 'other_action']);
Route::get('/routing_sample/test5_route_param_test/{str1?}/{str2?}', [RoutingSampleController::class, 'route_param_sample']);

/* シングルアクションコントローラを呼び出す
 * Route::get('対象URL', コントローラ名::class)
 */
use App\Http\Controllers\SingleActionSampleController; /* 本来は、useはファイルの先頭にまとめて書くのが望ましい */
Route::get('/routing_sample/test6/', SingleActionSampleController::class);

/* 指定のビューを直接呼び出す
 * return (view('ビューファイル名', ['ビューで使う変数名' => '値']));
 */
Route::get('/routing_sample/test7/{param?}', function($param = ''){
    return (view('routing_sample.test7', ['param' => $param]));
});
/* または、以下のようにRoute::viewメソッドを使って書くこともできる */
// Route::view('/routing_sample/test6/{param?}', 'routing_sample.test5', ['param']);

use App\Http\Controllers\RequestClassSampleController; /* 本来は、useはファイルの先頭にまとめて書くのが望ましい */
Route::get('/requestclass_sample1', [RequestClassSampleController::class, 'sample1']);
Route::get('/requestclass_sample2', [RequestClassSampleController::class, 'sample2']);

use App\Http\Controllers\ResponseClassSampleController; /* 本来は、useはファイルの先頭にまとめて書くのが望ましい */
Route::get('/responseclass_sample', [ResponseClassSampleController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
