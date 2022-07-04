<?php

/* artisan make:command MyCommand で生成される */

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    /* $signature で、コマンドの名称と引数を設定する
     */
    protected $signature = 'my:command {greet} {--name=someone}'; /* artisan コマンドの名称 で入力する内容 */

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '練習コマンドです！！'; /* コマンドのヘルプメッセージ、artisan help の一覧で表示される */

    /**
     * Create a new command instance.
     *
     * @return void
     */
    /* 何か初期化処理をやっておく必要があればここに書く(DI もできる) */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    /* 実行時の処理内容を書いていく */
    public function handle()
    {
        print("this is my:command output\n");

        /* コマンドライン引数で渡した内容を表示する */
        dump($this->argument()); /* 設定必須のもの(ないと動かないもの) */
        dump($this->option()); /* 入力任意の内容(無くても動くもの) */

        $greet = $this->argument('greet');
        $name = $this->option('name');

        print("$greet, $name!!\n");

        return Command::SUCCESS;
    }
}
