<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('langs')->insert([
            ['name' => 'English', 'speaker_num' => 1000000000, 'greeting' => 'Hello'],
            ['name' => '日本語', 'speaker_num' => 10000, 'greeting' => 'こんにちは'],
            ['name' => 'Chinese', 'speaker_num' => 1000000, 'greeting' => 'nhei-hao'],
        ]);
    }
}
