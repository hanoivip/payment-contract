<?php

namespace Hanoivip\PaymentContract;

use Illuminate\Support\ServiceProvider;

class LibServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config' => config_path(),
        ]);
    }
    
    public function register()
    {
        $this->app->bind("PaymentService", function ($app, $cfg) {
            $inprocess = config('payment.in_process', true);
            if ($inprocess)
            {
                return $this->app->make('LocalPaymentService');
            }
            else 
            {
                return new PaymentProxy();
            }
        });
        $this->commands([
        ]);
    }
}
