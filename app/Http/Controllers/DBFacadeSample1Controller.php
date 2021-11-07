<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBFacadeSample1Controller extends Controller
{
    public function index()
    {
        $dogs = DB::select('SELECT * FROM dogs');

        /* 名前に「チ」を含む犬のデータだけを取り出す例 */
        // $dogs = DB::select('SELECT * FROM dogs WHERE name LIKE ?', ['%チ%']);

        return (view('dogs', ['dogs' => $dogs]));
    }
    public function detail($id = 1)
    {
        // $dogs = DB::select('select * from dogs where id = ?', [$id]);
        /* 特定のレコードを利用する場合、[0]と要素番号を指定する */
        // return (view('dog_detail', ['dog' => $dogs[0]]));

        /* 取り出されるレコードが一つだけ、とわかっている場合、selectOne()も利用できる
         * この場合は配列の要素番号を指定しなくてよい
         */
        $dog = DB::selectOne('select * from dogs where id = ?', [$id]);
        return ( view('dog_detail', ['dog' => $dog]) );
    }
}
