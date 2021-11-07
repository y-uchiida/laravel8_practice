<?php

namespace App\Http\Middleware;

use Closure;

class MiddlewareSample2
{
    public function handle($request, Closure $next)
    {
        /* コントローラのアクションメソッド実行前の処理 */
        $data = $request->call_relay;
        $data[] = 'MiddlewareSample2のレンダリング前処理です';
        $request->merge(['call_relay' => $data]);

        /* 次に登録されたミドルウェアのhandle() メソッドへ処理を渡す */
        $response = $next($request);

        /* ビューのレンダリング後の処理 */
        $content = $response->content(). '<li>MiddlewareSample2でのレンダリング後処理です';
        $response->setContent($content);
        return ($response);

    }
}
