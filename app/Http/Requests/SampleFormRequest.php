<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SampleFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /* フォームを利用可能（データを受け付けるべき）であれば true
         * そうでない場合はfalse
         * フォームがユーザーの権限に紐づいている場合などに利用
         */
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:100'], /* 入力必須、100文字以内 */
            'email' => ['required', 'email:rfc'],  /* 入力必須、メールアドレスの形式か確認 */
            'content' => ['max:1000'],  /* 入力必須、1000文字以内 */
        ];
    }

    /* 項目とエラー内容ごとにメッセージを設定 */
    public function messages(){
        return [
            'name.required' => 'お名前をご入力ください',
            'name.max' => 'お名前は100字以内で入力してください',
            'email.required' => 'ご連絡先をご入力ください',
            'email.email' => 'メールアドレスの形式に誤りがあります',
            'content.max' => 'お問い合わせ内容は1000字以内で入力してください',
        ];
    }
}
