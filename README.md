[![License](https://img.shields.io/badge/License-MIT-yellow.svg?style=flat-square)](https://packagist.org/packages/mazfreelance/laravel-command-generator)
[![StyleCI](https://github.styleci.io/repos/7548986/shield?style=square)](https://packagist.org/packages/mazfreelance/laravel-command-generator)
[![Latest Version](https://img.shields.io/github/tag/mazfreelance/laravel-command-generator.svg?style=flat-square&label=release)](https://github.com/mazfreelance/laravel-command-generator/tags)
[![Total Downloads](https://img.shields.io/packagist/dt/mazfreelance/laravel-command-generator.svg?style=flat-square)](https://packagist.org/packages/mazfreelance/laravel-command-generator)
[![Laravel Framework](https://img.shields.io/badge/extension-Laravel_Framework-green.svg?style=flat-square)](#)

# Laravel Command Generator

This is a simple package that includes some of custom Laravel artisan command into Laravel/Lumen.

## Installation

You can install the package via composer:

```bash
composer require mazfreelance/laravel-command-generator --dev
```

## Configuration

### Laravel
Edit the `config/app.php` file and add the following line to `providers`:

```php
...
Mazfreelance\LaravelCommandGenerator\ServiceProvider::class
...
```


### Lumen
Edit the `bootstrap/app.php` file and add the following line to register the service provider:

```php
...
$app->register(Mazfreelance\LaravelCommandGenerator\ServiceProvider::class);
...
```

#### [Additional command for Lumen Only](https://github.com/raditzfarhan/lumen-command-generator)



## Available Commands

``` bash
make:action         Create a new Action class
make:dto            Create a new Data Transfer Object class
```

## Change log

Please see the [changelog](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Mazfreelance](https://github.com/mazfreelance)

## License

MIT. Please see the [license file](LICENSE) for more information.
