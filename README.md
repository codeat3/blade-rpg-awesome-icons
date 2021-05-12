<p align="center">
    <img src="./socialcard-blade-rpg-awesome-icons.png" width="1280" title="Social Card Blade RPG Awesome Icons">
</p>

# Blade RPG Awesome Icons

<a href="https://github.com/codeat3/blade-rpg-awesome-icons/actions?query=workflow%3ATests">
    <img src="https://github.com/codeat3/blade-rpg-awesome-icons/workflows/Tests/badge.svg" alt="Tests">
</a>
<a href="https://packagist.org/packages/codeat3/blade-rpg-awesome-icons">
    <img src="https://img.shields.io/packagist/v/codeat3/blade-rpg-awesome-icons" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/codeat3/blade-rpg-awesome-icons">
    <img src="https://img.shields.io/packagist/dt/codeat3/blade-rpg-awesome-icons" alt="Total Downloads">
</a>

A package to easily make use of [RPG Awesome Icons](https://github.com/nagoshiashumari/rpg-awesome-raw/) in your Laravel Blade views.

For a full list of available icons see [the SVG directory](resources/svg) or preview them at [nagoshiashumari.github.io](https://nagoshiashumari.github.io/Rpg-Awesome/).

## Requirements

- PHP 7.3 or higher
- Laravel 7.14 or higher

## Installation

```bash
composer require codeat3/blade-rpg-awesome-icons
```

## Updating

Please refer to [`the upgrade guide`](UPGRADE.md) when updating the library.

## Blade Icons

Blade RPG Awesome Icons uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality. We also recommend to [enable icon caching](https://github.com/blade-ui-kit/blade-icons#caching) with this library.

## Configuration

Blade RPG Awesome Icons also offers the ability to use features from Blade Icons like default classes, default attributes, etc. If you'd like to configure these, publish the `blade-rpg-awesome-icons.php` config file:

```bash
php artisan vendor:publish --tag=blade-rpg-awesome-icons-config
```

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-rpg-archive/>
```

You can also pass classes to your icon components:

```blade
<x-rpg-archive class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-rpg-archive style="color: #555"/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-rpg --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-rpg/archive.svg') }}" width="10" height="10"/>
```

## Changelog

Check out the [CHANGELOG](CHANGELOG.md) in this repository for all the recent changes.

## Maintainers

Blade RPG Awesome Icons is developed and maintained by [Swapnil Sarwe](https://swapnilsarwe.com).

## License

Blade RPG Awesome Icons is open-sourced software licensed under [the MIT license](LICENSE.md).
