<?php

/* ResponseClassSampleController.php
 * route/web.php からのルーティング設定の実装例として作成。
 * 作成コマンド:
 *   $ php artisan make:controller ResponseClassSampleController
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response; /* Responseクラスを読み込み */

class ResponseClassSampleController extends Controller
{
    /* アクションメソッドの引数に、Response クラスのオブジェクト変数を追加 */
    public function index(Response $response)
    {
        /* ヘッダ情報を追加する */
        $response->header('X-Header-Test', 'Header-Test-Value');
        /* クッキーを追加する */
        $response->cookie('Cookie-Test', 'Cookie-Value');
        $content = <<< _EOL_
        <h1>this is ResponseClassSampleController@index</h1>
        <pre>$response</pre>
        <hr>
_EOL_;
        $response->setContent($content);
        return ($response);
    }
}
