<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* SampleFormRequest を追加 */
use App\Http\Requests\SampleFormRequest;

class FormRequestSampleController extends Controller
{
    public function input(Request $request){
        return ( view('form_request_sample') );
    }

    public function post(SampleFormRequest $request){
        return (
            <<< _EOL_
            <h1>お問い合わせありがとうございました</h1>
            <a href="./form_request_sample">元のページへ戻る</a>
_EOL_
        );
    }
}
