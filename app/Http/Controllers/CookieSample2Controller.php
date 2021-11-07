<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie; /* これを追加 */

class CookieSample2Controller extends Controller
{
    public function input(Request $request){
        $cookie_string2 = $request->cookie('cookie_string2');
        return(view('cookie_sample2', ['cookie_string2'=> $cookie_string2]));
    }

    public function post(Request $request){
        $cookie_string2 = '';

        /* 押されたボタンが、削除か送信かによって処理を変える */
        if ($request->has('send')){
            /* sendの場合... Cookieを保存する */
            $cookie_string2 = $request->cookie_string2;
            Cookie::queue('cookie_string2', $cookie_string2, 100);
        }
        else if ($request->has('delete')){
            /* deleteの場合... Cookieを削除する */
            Cookie::queue('cookie_string2', '', -100);
        }

        return (view('cookie_sample2', ['cookie_string2' => $cookie_string2]));
    }
}
