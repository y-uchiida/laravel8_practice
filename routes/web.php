<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SampleViewController;

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

/* return に view() 関数を与えることで、指定のviewファイルがレンダリングをする */
Route::get('/sample_view1', function (){ return ( view('sample_view1') ); });

/* viewにシンプルにデータを渡すだけなら、Route::view() メソッドでviewファイルを直接指定することもできる */
Route::view('/sample_view2', 'sample_view2', ['key1' => 'value1', 'key2' => 'value2']);

/* コントローラへ処理を渡したあと、sample_view3のviewファイルを呼び出している */
Route::get('/sample_view3', [SampleViewController::class, 'sample3']);

/* URLからパラメータをコントローラへ渡し、コントローラはそれをviewファイルへパスする */
Route::get('/sample_view4/{id?}/{name?}', [SampleViewController::class, 'sample4']);

/* blade 構文サンプル1: 変数および関数の処理結果の展開 */
Route::view('/blade_sample1/{param1?}/{param2?}', 'blade_sample1', ['string1' => 'blade syntax training!']);

/* blade 構文サンプル2: 条件分岐 */
Route::view('/blade_sample2', 'blade_sample2');

/* blade 構文サンプル3: 繰り返し処理 */
Route::view('/blade_sample3', 'blade_sample3');

/* blade 構文サンプル4: CSRF対策とその他 */
Route::get('/form_test', function(){ return(view('form_test')); });
Route::post('/form_test', function(){ return(view('form_test')); });

/* レイアウト定義ファイルによるビューの分割 */
Route::view('/blogpost/1', 'blogpost_1');
Route::view('/blogpost/2', 'blogpost_2');
Route::view('/blogpost/3', 'blogpost_3');

/* レイアウトから再利用可能なコンポーネントを切り出す */
Route::view('/blogpost/4', 'blogpost_4');

/* ビューコンポーザの利用 */
Route::view('/sample_view_composer', 'sample_view_composer');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';
