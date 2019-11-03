<?php
namespace SmartDog23\LaravelAzureFaceApi\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelAzureFaceApi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'LaravelAzureFaceApi';
    }
}