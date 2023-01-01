[![License](https://img.shields.io/badge/License-MIT-yellow.svg?style=flat-square)](https://packagist.org/packages/mazfreelance/laravel-command-generator)
[![StyleCI](https://github.styleci.io/repos/7548986/shield?style=square)](https://packagist.org/packages/mazfreelance/laravel-command-generator)
[![Latest Version](https://img.shields.io/github/tag/mazfreelance/laravel-command-generator.svg?style=flat-square&label=release)](https://github.com/mazfreelance/laravel-command-generator/tags)
[![Total Downloads](https://img.shields.io/packagist/dt/mazfreelance/laravel-command-generator.svg?style=flat-square)](https://packagist.org/packages/mazfreelance/laravel-command-generator)
[![Laravel Framework](https://img.shields.io/badge/extension-Laravel_Framework-green.svg?style=flat-square)](#)

# Laravel Command Generator

This is a simple package that includes some of custom Laravel artisan command into Laravel/Lumen.

## Installation

Note: This repository now follows the Laravel/Lumen framework versioning. Use the appropriate version of this package for your Laravel/Lumen application.

You can install the package via composer:

```bash
composer require mazfreelance/laravel-command-generator
```

#### PHP7.x or below

```bash
composer require mazfreelance/laravel-command-generator=^1.0.0
```

## Configuration
### Available Commands

``` bash
make:action         Create a new Action class
make:dto            Create a new Data Transfer Object class
```

#### Default Settings
The default namespace for all command are `App\Actions\` and each name expects the filter classname to follow the `{$Name}Action` naming convention.  Here is an example of action and data transfer objects based on the default naming convention.

| Actions                         | Data Transfer Object        |
|---------------------------------|-----------------------------|
| `App\Actions\UserFilter`        | `App\DTO\UserFilter`        |
| `App\Actions\PrivatePostFilter` | `App\DTO\PrivatePostFilter` |
| `App\Actions\GuestPostFilter`   | `App\DTO\GuestPostFilter`   |

#### Laravel

##### With Configuration File (Optional)

> Registering the service provider will give you access to the `php artisan model:action {name}` command as well as allow you to publish the configuration file.  Registering the service provider is not required and only needed if you want to change the default namespace or use the artisan command

After installing the Custom Command library, register the `Mazfreelance\LaravelCommandGenerator\ServiceProvider::class` in your `config/app.php` configuration file:

```php
'providers' => [
    // Other service providers...

    Mazfreelance\LaravelCommandGenerator\ServiceProvider::class,
],
```

Copy the package config to your local config with the publish command:

```bash
php artisan vendor:publish --provider="Mazfreelance\LaravelCommandGenerator\ServiceProvider::class"
```

If install version 2.1.0 (Lumen can use this part if install [`mazfreelance/lumen-vendor-publish`](https://github.com/mazfreelance/lumen-vendor-publish)),

Optionally, You can publish the config file with:
```bash
# If install version 2.1.0
# Optionally, You can publish the config file with:
php artisan vendor:publish --provider="Spatie\LaravelData\LaravelDataServiceProvider" --tag="data-config"
```

In the `config/custom-command.php` config file.  Set the namespace your model filters will reside in:

```php
'namespace' => [
    'action' => 'App\\Actions\\',
    'dto' => 'App\\DTO\\',
]
```
#### Lumen

##### Register The Service Provider

>This is only required if you want to use the `php artisan make:action|dto` command. [#Avaiable Command](#available-commands)

In `bootstrap/app.php`:

```php
$app->register(Mazfreelance\LaravelCommandGenerator\ServiceProvider::class);
```

```php
// If install version 2.1.0,
$app->register(Spatie\LaravelData\LaravelDataServiceProvider::class);
```

##### Change The Default Namespace

In `bootstrap/app.php`:

```php
config(['custom-command.action.namespace' => "App\\Actions\\"]);
config(['custom-command.dto.namespace' => "App\\DTO\\"]);
```

## Change log

Please see the [changelog](CHANGELOG.md) for more information on what has changed recently.

## Other command for Lumen
- [Additional lumen command](https://github.com/raditzfarhan/lumen-command-generator)
- [Lumen Vendor Publish](https://github.com/mazfreelance/lumen-vendor-publish)

## Credits

- [Mazfreelance](https://github.com/mazfreelance)

## License

MIT. Please see the [license file](LICENSE) for more information.
