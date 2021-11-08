<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OwnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            ['name' => 'nero'],
            ['name' => 'suzuki'],
            ['name' => 'haidi'],
            ['name' => 'saigoh'],
            ['name' => 'john'],
        ]);
    }
}
