<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Address;

class AddressController extends Controller
{
    //

    public function index()
    {
        /* addressesのデータを取り出す */
        $addresses = Address::all();
        return view('address_list', compact('addresses'));
    }

    /* addressの新規追加 */
    public function create(Request $request)
    {
        /* バリデーション */
        $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'email',
        ]);

        $new_address = new Address(); /* 新規作成の入れ物になるオブジェクトを生成 */
        $new_address->first_name = $request->first_name;
        $new_address->last_name = $request->last_name;
        $new_address->email = $request->email;

        /* save() でデータベースに保存する */
        $new_address->save();

        /* リダイレクトで、一覧画面に戻る */
        return redirect('/address/list');
    }
}
