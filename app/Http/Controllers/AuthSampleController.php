<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; /* 認証処理のファサードを追加 */

class AuthSampleController extends Controller
{
    public function login_only()
    {
        return (view('login_only'));
    }

    public function display_user_info()
    {
        $user = Auth::User();
        return (view('display_user_info', ['user' => $user]));
    }

    /* ログアウトの実装サンプル */
    public function my_logout_sample()
    {
        if (Auth::check()) {/* Auth::check() でログインしているかどうかを判定する */
            $name = Auth::user()->name;
        }
        else {
            /* ログインしていない場合、その旨メッセージに保持してdisplay_user_info へリダイレクトする */
            return(redirect()->route('display_user_info')->with(['message' => "ログインしていません"]) );
        }
        /* Auth::logout() で、現在のログインユーザーのセッションデータを破棄 */
        Auth::logout();
        /* display_user_info へリダイレクトする */
        return ( redirect()->route('display_user_info')->with(['message' => "{$name} からログアウトしました"]) );
    }
}
