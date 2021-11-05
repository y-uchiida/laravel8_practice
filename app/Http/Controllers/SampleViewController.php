<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleViewController extends Controller
{
    /* GETメソッドで受け取った値を、viewファイルへ転送する */
    public function sample3(Request $request){
        $request_get = [
            'id' => $request->id,
            'name' => $request->name,
        ];
        return (view('sample_view3', $request_get));
    }

    /* URLのパスパラメータをviewファイルへ渡す */
    public function sample4($id = 'id', $name = 'name'){
        $path_param = [
            'id' => $id,
            'name' => strtoupper($name),
        ];
        return (view('sample_view4', $path_param));
    }
}
