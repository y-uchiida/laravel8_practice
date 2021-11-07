<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiddlewareSampleController extends Controller
{
    public function index(Request $request){
        $call_relay = $request->call_relay;
        $call_relay[] = 'MiddlewareSampleControllerの処理です';
        return (view('middleware_sample', ['call_relay' => $call_relay]));
    }
}
