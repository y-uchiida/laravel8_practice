<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class InitialDummyTasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            [
                'title' => 'webフォームのhtmlを習得する',
                'detail' => 'htmlで、画面上からユーザーの入力内容を受け取る方法を身につける',
                'finished' => false,
                'user_id' => 1,
                'created_at' => '2021-11-01 00:00:00',
                'updated_at' => '2021-11-01 00:00:00',
            ],
            [
                'title' => 'cssを習得する',
                'detail' => 'cssで、ユーザーが操作しやすい画面の作成ができるようになる',
                'finished' => false,
                'user_id' => 1,
                'created_at' => '2021-11-01 00:00:00',
                'updated_at' => '2021-11-01 00:00:00',
            ],
            [
                'title' => 'JavaScriptを習得する',
                'detail' => 'JavaScriptを利用して、よりインタラクティブな画面動作を実現する',
                'finished' => false,
                'user_id' => 1,
                'created_at' => '2021-11-01 00:00:00',
                'updated_at' => '2021-11-01 00:00:00',
            ],
            [
                'title' => 'PHPを習得する',
                'detail' => 'Webアプリケーションを作るための基本知識としてまずPHPを身につける',
                'finished' => false,
                'user_id' => 1,
                'created_at' => '2021-11-01 00:00:00',
                'updated_at' => '2021-11-01 00:00:00',
            ],
            [
                'title' => 'Laravelを学習する',
                'detail' => 'Laravelを用いて、高機能なWebアプリケーションを効率的に開発する',
                'finished' => false,
                'user_id' => 1,
                'created_at' => '2021-11-01 00:00:00',
                'updated_at' => '2021-11-01 00:00:00',
            ],
        ]);
    }
}
