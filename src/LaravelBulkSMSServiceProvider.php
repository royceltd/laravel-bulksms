<?php

namespace RoyceLtd\LaravelBulkSMS;

use Illuminate\Support\ServiceProvider;
use RoyceLtd\LaravelBulkSMS\Services\LaravelBulkSMS;

class LaravelBulkSMSServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('sendsms', function () {

            return new LaravelBulkSMS();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
