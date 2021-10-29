<?php

declare(strict_types=1);

namespace Codeat3\BladeRPGAwesomeIcons;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeRPGAwesomeIconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-rpg-awesome-icons', []);

            $factory->add('rpg-awesome-icons', array_merge(['path' => __DIR__.'/../resources/svg'], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blade-rpg-awesome-icons.php', 'blade-rpg-awesome-icons');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-rpg-awesome-icons'),
            ], 'blade-rpg'); // TODO: update the alias to `blade-rpg-awesome-icons` for better readability in next major release

            $this->publishes([
                __DIR__.'/../config/blade-rpg-awesome-icons.php' => $this->app->configPath('blade-rpg-awesome-icons.php'),
            ], 'blade-rpg-awesome-icons-config');
        }
    }
}
