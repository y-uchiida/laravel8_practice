<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; /* DB ファサードのクラスを読み込み */

class DBFacadeSample2Controller extends Controller
{
    public function index()
    {
        $dogs = DB::table('dogs')->get();

        /* where() で条件を指定し、get() でデータを取得 */
        // $dogs = DB::table('dogs')->where('name', "LIKE", "%8%")->where("weight", ">", 1000)->get();

        /* toSql(): 生成されたSQLを出力する */
        // dd(DB::table('dogs')->where('name', "LIKE", "%犬%")->where("weight", ">", 1000)->toSql());
        return (view('dogs', ['dogs' => $dogs]));
    }
    public function detail($id = 1)
    {
        // $dogs = DB::table('dogs')->where('id', $id)->get();
        /* 特定のレコードを利用する場合、[0]と要素番号を指定する */
        // return (view('dog_detail', ['dog' => $dogs[0]]));
        /* 取り出されるレコードが一つだけ、とわかっている場合、first()も利用できる
         * この場合は配列の要素番号を指定しなくてよい
         */
        $dog = DB::table('dogs')->where('id', $id)->first();
        return (view('dog_detail', ['dog' => $dog]));
    }
}
