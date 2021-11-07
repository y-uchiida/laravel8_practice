<?php

/* $ php artisan make:middleware MiddlewareSample1
 * によって生成されたコード
 */

/* 名前空間を指定 */
namespace App\Http\Middleware;

use Closure;

class MiddlewareSample1
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    /*
     * Request クラスのオブジェクト $request
     * リクエストの情報を参照・操作できる
     * Closure クラスのオブジェクト $next
     * $next($request) を実行すると、次のミドルウェアのhandle()関数が実行される
     * 引数に与えられた $request オブジェクトは、次のミドルウェアで利用できる
     */
    public function handle($request, Closure $next)
    {
        /* コントローラのアクションメソッド実行前の処理 */
        $data[] = 'MiddlewareSample1のレンダリング前処理です';
        $request->merge(['call_relay'=> $data]);

        /* 次に登録されたミドルウェアのhandle() メソッドへ処理を渡す */
        $response = $next($request);

        /* ビューのレンダリング後の処理 */
        $content = $response->content(). '<li>MiddlewareSample1でのレンダリング後処理です';
        $content .= '</ol>';
        $response->setContent($content);
        return ($response);
    }
}
