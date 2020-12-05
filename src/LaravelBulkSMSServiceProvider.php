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
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        if ($this->app->runningInConsole()) {
            // Export the migration
            if (!class_exists('CreateSentTextMessagesTable')) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_sent_text_messages_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_sent_text_messages_table.php'),
                    // you can add any number of migrations here
                ], 'migrations');
            }
        }
    }
}
