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
        DB::table('dogs')->insert([
            ['name' => 'pochi', 'breed' => '柴犬', 'weight' => '7000', 'owner_id' => 2],
            ['name' => 'hachi', 'breed' => '秋田犬', 'weight' => '30000', 'owner_id' => 4],
            ['name' => 'patrasche', 'breed' => 'Bouvier des Flandres', 'weight' => '80000', 'owner_id' => 1],
            ['name' => 'joseph', 'breed' => 'セントバーナード', 'weight' => '75000', 'owner_id' => 3],
            ['name' => 'kame', 'breed' => 'ボーダーコリー', 'weight' => '18000', 'owner_id' => 5],
        ]);

    }
}
