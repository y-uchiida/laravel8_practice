<?php

/* RequestClassSampleController.php
 * Request クラスの利用例として作成。
 * 作成コマンド:
 *   $ php artisan make:controller RequestClassSampleController --invokable
 */

namespace App\Http\Controllers;

/* Request クラスを利用するため、Use でクラスを読み込んでおく */
use Illuminate\Http\Request;

class RequestClassSampleController extends Controller
{
    public function sample1(Request $request)
    {
        print('<h1>this is RequestClassSampleController</h1>');
        print('<h2>Request String</h2>');
        print("<pre>$request</pre>");
        print('<hr>');

        /* GETやPOSTで送信されたデータを一覧で取得する */
        print('<h2>request->all()</h2>');
        print('<pre>');
        var_dump($request->all());
        print('</pre>');
        print('<hr>');

        /* URLに付随するクエリストリングを一覧で取得する */
        print('<h2>request->query()</h2>');
        print('<pre>');
        var_dump($request->query());
        print('</pre>');
        print('<hr>');

        /* GETやPOSTで送信されたデータを指定して取得する */
        print('<h2>request->input("name")</h2>');
        print($request->input("name"));
        print('<hr>');
    }

    public function sample2(Request $request){
        return (view('requestclass_sample2', ['req' => $request]));
    }
}
