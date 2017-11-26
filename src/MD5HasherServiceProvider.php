<?php

namespace Hongli\Hasher;

use Illuminate\Support\ServiceProvider;

class MD5HasherServiceProvider extends ServiceProvider
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
     * 将md5hash注册到ico容器中
     * @return void
     */
    public function register()
    {
        $this->app->singleton('md5hash', function () {
            return new MD5Hasher();
        });
    }
}
