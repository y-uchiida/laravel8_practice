<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();

        /* sendOutputTo('出力先') で、スケジュール実行の結果を指定ファイルに出力 */
        $schedule
            ->exec('echo "hello from Laravel schedule!!"')/* exec: OSコマンドを引数で指定して実行する */
            ->everyMinute() /* 実行の間隔、everyMinute() は毎分実行 */
            ->sendOutputTo('storage/logs/schedule_result.log'); /* 出力先の指定 */

        $schedule
            ->command('my:command good_evening --name=Laravel') /* command: artisan コマンドを実行する */
            ->hourly() /* 実行の感覚、hourly() は毎時０分に実行 */
            ->sendOutputTo('storage/logs/my_command_output.log');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
