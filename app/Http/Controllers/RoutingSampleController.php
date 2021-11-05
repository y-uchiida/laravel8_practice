<?php

/* RoutingSampleController.php
 * route/web.php からのルーティング設定の実装例として作成。
 * 作成コマンド:
 *   $ php artisan make:controller RoutingSampleController
 */

namespace App\Http\Controllers;

class RoutingSampleController extends Controller
{
    /*アクションを設定。functionで定義する
     *宣言したアクションは、[コントローラ名]@[アクション名]でルータファイルから参照できる
     */
    public function index()
    {
        return ('<h1>this is RoutingSampleController@index</h1>');
    }

    public function other_action()
    {
        return ('<h1>this is RoutingSampleController@other_action</h1>');
    }

    /*ルートパラメータ(URL内文字列を変数にする機能)を設定*/
    public function route_param_sample($str1 = 'empty', $str2 = 'empty')
    {
        return (<<<_EOL
    <h1>this is RoutingSampleController@send_string</h1>
    <p>str1:${str1}</p>
    <p>str2:${str2}</p>
    _EOL
        );
    }
}
