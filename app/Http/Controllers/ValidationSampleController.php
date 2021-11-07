<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationSampleController extends Controller
{
    /*
     * input: 入力画面のアクション
     * 入力内容を扱うため、Request クラスを引数で受け取る
     */
    public function input(Request $request){
        return (
            view('validation_sample', ['msg' => '以下のフォームを入力してください'])
        );
    }

    /*
     * post: 入力を受け取った後のアクション
     */
    public function post(Request $request){
        /* フォームの入力項目に対する検証を行う
         * 検証内容は、第二引数の配列に記述する
         */
        $this->validate($request, [
            'name' => 'required',
            'mail' => 'email',
            'age' => ['numeric', 'between:0,150'],
        ]);

        /* すべての検証内容に合致した入力だった場合、
         * validate() 以降の処理を継続
         */
        return (
            view('validation_sample',['msg' => '正しい入力です'])
        );
    }
}
