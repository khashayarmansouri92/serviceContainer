<?php

namespace App\Providers;

use App\Billing\PaymentGetwayA;
use App\Billing\PaymentGetwayContract;
use Illuminate\Support\ServiceProvider;

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
        $this->app->singleton(PaymentGetwayContract::class, function (){
            return new PaymentGetwayA("USD");
        });
    }
}
