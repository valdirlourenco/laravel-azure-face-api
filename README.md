SmartDog23 - Laravel Azure Face API
===================================

[![License](https://poser.pugx.org/smartdog23/laravel-azure-face-api/license)](https://packagist.org/packages/smartdog23/laravel-azure-face-api)
[![Latest Stable Version](https://poser.pugx.org/smartdog23/laravel-azure-face-api/v/stable)](https://packagist.org/packages/smartdog23/laravel-azure-face-api)
[![Total Downloads](https://poser.pugx.org/smartdog23/laravel-azure-face-api/downloads)](https://packagist.org/packages/smartdog23/laravel-azure-face-api)


Laravel Azure Face API is a PHP Client that make easy to use Azure's Face Recognition API

(this is a Laravel Facade based on [PHP Azure Face API](https://github.com/smartdog23/php-azure-face-api) library)


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
