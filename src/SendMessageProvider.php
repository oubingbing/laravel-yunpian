<?php

namespace Bing\LaravelYunPian;

use Illuminate\Support\ServiceProvider;

class SendMessageProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('HkMessage',function (){
            return new SendMessage();
        });
    }
}
