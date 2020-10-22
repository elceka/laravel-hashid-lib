<?php

declare(strict_types=1);

namespace Elceka\Laravel\HashId;

use Hashids\Hashids;
use Illuminate\Support\ServiceProvider;

/**
 * Class LaravelHashidsServiceProvider
 *
 * @package Elceka\Laravel\HashId
 */
class LaravelHashidsServiceProvider extends ServiceProvider
{
    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-hashid.php', 'laravel-hashid');
    }

    /**
     *
     */
    public function register()
    {
        $this->app->bind(Hashids::class, function ($app) {
            return new Hashids(
                config('laravel-hashid.salt', ''),
                config('laravel-hashid.min_hash_length', 0),
                config('laravel-hashid.hash_alphanumeric_list', 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'),
            );
        });

        $this->app->bind('hasher', function ($app) {
            return new Hasher();
        });

        $this->publishConfig();
    }

    /**
     * Publish Config
     *
     * @return void
     */
    public function publishConfig(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/laravel-hashid.php' => config_path('laravel-hashid.php'),
            ], 'config');
        }
    }
}
