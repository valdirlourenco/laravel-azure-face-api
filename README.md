SmartDog23 - Laravel Azure Face API
===================================

[![Latest Version](https://img.shields.io/github/release/smartdog23/laravel-azure-face-api.svg?style=flat-square)](https://github.com/smartdog23/laravel-azure-face-api/releases)
[![Total Downloads](https://img.shields.io/packagist/dt/smartdog23/laravel-azure-face-api.svg?style=flat-square)](https://packagist.org/packages/smartdog23/laravel-azure-face-api)

Laravel Azure Face API is a PHP Client that make easy to use Azure's Face Recognition API

```php

$result = LaravelAzureFaceApi::largePersonGroup()->create()->execute('test-group', 'description of the group');

echo $result->getBody()->getContents();

```

## Help and docs

Soon


## Installation

The recommended way to install LaravelAzureFaceAPI is through
[Composer](https://getcomposer.org/).

```bash
composer require smartdog23/laravel-azure-face-api
```

#### Copy the package config to your local config with the publish command:

```shell
php artisan vendor:publish --provider="SmartDog23\LaravelAzureFaceApi\Providers\LaravelAzureFaceApiServiceProvider"
```

## Usage

Using the simple mode

```php
$result = LaravelAzureFaceApi::largePersonGroup()->create()->execute('test-group', 'description of the group');
echo $result->getBody()->getContents();
```

Using the advanced mode

```php
$options = new CreateOptions();
$options->parameters()->largePersonGroupId('test-group');
$options->body()->name('description of the group');
$result = LaravelAzureFaceApi::largePersonGroup()->create()->executeWithOptions($options);
echo $result->getBody()->getContents();
```
