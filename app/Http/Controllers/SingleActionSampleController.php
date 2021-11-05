<?php
/* SingleActionSampleController.php
 * route/web.php からのルーティング設定の実装例として作成。
 * 作成コマンド:
 *   $ php artisan make:controller SingleActionSampleController --invokable
 */

namespace App\Http\Controllers;

class SingleActionSampleController extends Controller
{
    public function __invoke()
    {
        $str = $this->test_func();
        return (<<<_EOL_
        <h1>this is SingleActionSampleController@__invoke</h1>
        <p>str : $str</p>
        _EOL_
        );
    }

    /* __invoke()で行う処理が長くなる場合は、
     * public function で別のメソッドを作って、分割して記述すると見通しがよくなる */
    private function test_func()
    {
        return ('*** string_from_test_func ***');
    }
}
