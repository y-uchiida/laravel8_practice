<?php

/* このコードが実行させるために、 config.app 内の'providers' 配列に以下を追記しておく
 * App\Providers\SampleServiceProvider::class
 */

namespace App\Http\Composers;

    use Illuminate\View\View;

    class SampleViewComposer{
        /* View::composerが実行されたとき、
         * compose() メソッドが実行される
         */
        public function compose(View $view){
            /* view側で、データを配列で扱えるようにする */
            $data_arr = ['aaa', 'bbb', 'ccc'];
            $view->with('data_arr', $data_arr);
            $view->with('Foo', 'bar');
        }
    }
