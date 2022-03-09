<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

/* DBファサードを読み込み */
use Illuminate\Support\Facades\DB;

/* Addressモデルも読み込み */
use App\Models\Address;

class addresses_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* DB ファサードを使う（復習） */
        DB::table('addresses')->insert([
            'first_name' => 'pochi',
            'last_name' => 'suzuki',
            'email' => 'pochi@dog.com'
        ]);

        /* モデルを使ってデータを入れる */
        $new_address = new Address(); // モデルのオブジェクトを創る
        $new_address->first_name = 'hachi'; //first_nameの内容を入れる
        $new_address->last_name = 'saigoh';
        $new_address->email = 'hachi@saiohsan.com';
        $new_address->save(); // データベースに変更内容を保存する
    }
}
