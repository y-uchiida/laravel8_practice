<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookieSample1Controller extends Controller
{
    public function input(Request $request){
        $cookie_string = $request->cookie('cookie_string');
        return(view('cookie_sample1', ['cookie_string'=> $cookie_string]));
    }

    public function post(Request $request){
        $cookie_string = '';

        /* 押されたボタンが、削除か送信かによって処理を変える */
        if ($request->has('send')){
            /* sendの場合... Cookieを保存する */
            $cookie_string = $request->cookie_string;
            $cookie = cookie('cookie_string', $cookie_string, 0);
        }
        else if ($request->has('delete')){
            /* deleteの場合... Cookieを削除する */
            $cookie = cookie('cookie_string', '', -100);
        }
        $response = response()->view('cookie_sample1', ['cookie_string' => $cookie_string]);
        $response->cookie($cookie);

        return ($response);
    }
}
