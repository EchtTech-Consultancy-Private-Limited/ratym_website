<?php

namespace App\Providers;

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
        // \URL::forceScheme('https');

        // $this->app['request']->server->set('HTTPS', true);
    
        // $this->app['request']->server->set('HTTP_HOST', env('APP_URL_WWW'));
    
        // // Optionally, redirect non-canonical domains to the canonical domain
        // $this->app['router']->matched(function ($event) {
        //     if (request()->getHost() !== env('APP_URL_WWW')) {
        //         return redirect()->to(env('APP_URL') . request()->getRequestUri(), 301)->send();
        //     }
        // });
    }
}
