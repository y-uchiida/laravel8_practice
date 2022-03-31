<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Address;

class AddressController extends Controller
{
    //

    public function index(Request $request)
    {
        /* addressesのデータを取り出す */
        if ($request->input('email') != ""){
            /* 検索条件があれば、内容を絞り込みする */
            $addresses = Address::where('email', 'like', "%{$request->input('email')}%")->get();
        } else {
            /* 条件がなければまとめて取得する */
            $addresses = Address::all();
        }
        return view('address_list', compact('addresses', 'request'));
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

    /* 編集画面用のアクションメソッド */
    public function edit($id = -1){
        /* idの値でアドレス情報が登録されているか */
        $address = Address::findOrFail($id);

        // /* 取得した内容の確認(デバッグ) */
        // dd($address);

        /* 取得したデータの内容を表示する */
        return view('edit', compact('address'));
    }

    /* 更新処理用のアクションメソッド */
    public function update(Request $request, $id = -1)
    {
        /* URLのid パラメータの値と、リクエストのid の値が一致しているか */
        if ($id != $request->input('id')){
            abort(404); /* 一致しない場合は、404エラーにする */
        }

        /* バリデーションを実施 */
        $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'email',
        ]);

        /* findOrFailでデータ取得にトライ、失敗ならエラーを返す */
        $address = Address::findOrFail($id);

        /* フォームの内容でデータを更新する */
        $address->first_name = $request->input('first_name');
        $address->last_name = $request->input('last_name');
        $address->email = $request->input('email');

        /* DBのレコードに変更を反映 */
        $address->save();

        /* リダイレクトで、一覧画面に戻る */
        return redirect('/address/list');
    }

    /* addressの削除処理用 */
    public function delete(Request $request, $id = -1)
    {
        /* URLのid パラメータの値と、リクエストのid の値が一致しているか */
        if ($id != $request->input('id')){
            abort(404); /* 一致しない場合は、404エラーにする */
        }

        /* findOrFailでデータ取得にトライ、失敗ならエラーを返す */
        $address = Address::findOrFail($id);

        /* 削除する権限の確認処理(省略) */

        /* DBのレコードに変更を反映 */
        $address->delete();

        /* リダイレクトで、一覧画面に戻る */
        return redirect('/address/list');
    }
}
