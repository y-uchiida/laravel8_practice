<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dogs')->insert(Array(
            [
                'name' => 'ポチ',
                'breed' => '柴犬',
                'weight' => 5300
            ],
            [
                'name' => 'ハチ',
                'breed' => '秋田犬',
                'weight' => 30000
            ],
            [
                'name' => 'パトラッシュ',
                'breed' => 'ブービエ・デ・フランダース',
                'weight' => 30000
            ]
        ));

        /* ループなどで大量データを作成することもできる */
        $dogs = [];
        for ($count=0; $count<100; $count++){
            $dogs[] = [
                'name' => '犬_'. (1 + $count),
                'breed' => '犬種_'. (1 + $count),
                'weight' => 1000 * $count
            ];
        }
        DB::table('dogs')->insert($dogs);

    }
}
