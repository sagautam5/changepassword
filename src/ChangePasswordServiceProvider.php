<?php

namespace Sagautam5\ChangePassword;

use Illuminate\Support\ServiceProvider;

class ChangePasswordServiceProvider extends ServiceProvider
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
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views/', 'changepassword');

        $this->publishes([
            __DIR__ . '/views/password/change.blade.php' => resource_path('views/vendor/changepassword/password/change.blade.php')
        ], 'views');
    }
}
