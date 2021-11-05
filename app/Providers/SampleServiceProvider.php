<?php

namespace App\Providers;

/*
 * 独自に追加したサービスプロバイダーは、
 * config/app.php の providers配列に追加するなどして、
 * アプリケーションに登録しなければ使えない
 *
 * providers 配列に、以下のようにクラスとして追加する
 * App\Providers\SampleServiceProvider::class
 */

use Illuminate\Support\ServiceProvider;

/* View ファサードを利用するため、以下の行を追加 */
use Illuminate\Support\Facades\View;

class SampleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     * @return void
     */
    public function boot()
    {
        /* ViewComposerを登録する */
        View::composer(
            'sample_view_composer', 'App\Http\Composers\SampleViewComposer'
        );
    }
    /**
     * Register services.
     * @return void
     */
    public function register(){}

}
