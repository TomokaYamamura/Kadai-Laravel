<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; //chapter5 この行を追加
use Illuminate\Support\Facades\URL;    //chapter5 この行を追加
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);   //chapter5 boot()内に、この行を追加
        URL::forceScheme('https');          //chapter5 boot()内に、この行を追加
    }
}
