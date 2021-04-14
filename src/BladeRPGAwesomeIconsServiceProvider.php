<?php

declare(strict_types=1);

namespace Codeat3\BladeRPGAwesomeIcons;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;

final class BladeRPGAwesomeIconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->callAfterResolving(Factory::class, function (Factory $factory) {
            $factory->add('rpg-awesome-icons', [
                'path' => __DIR__.'/../resources/svg',
                'prefix' => 'rpg',
            ]);
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-rpg'),
            ], 'blade-rpg');
        }
    }
}
