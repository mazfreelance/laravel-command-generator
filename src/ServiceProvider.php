<?php

namespace Mazfreelance\LaravelCommandGenerator;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $commands = [
            'ActionCommand',
            'DataTransferObjectCommand',
        ];

        // register commands
        if ($this->app->runningInConsole()) {
            $this->commands(collect($commands)->map(function ($name) {
                return __NAMESPACE__ . "\Commands\\$name";
            })->toArray());
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}