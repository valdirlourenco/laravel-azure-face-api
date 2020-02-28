<?php
namespace SmartDog23\LaravelAzureFaceApi\Providers;
/*
 * Class LaravelAzureFaceApiServiceProvider
 * @package SmartDog23\LaravelAzureFaceApi
 */

use Illuminate\Support\ServiceProvider;
use SmartDog23\AzureFaceApi\AzureFaceApi;

class LaravelAzureFaceApiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Publish config files
        $this->publishes([
            __DIR__.'/../../config/azure-face-api.php' => config_path('azure-face-api.php'),
        ]);
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerLaravelAzureFaceApi();
        $this->mergeConfig();
    }
    /**
     * Register the application bindings.
     *
     * @return void
     */
    private function registerLaravelAzureFaceApi()
    {
        $this->app->singleton(AzureFaceApi::class, function ($app) {
            return new AzureFaceApi(config('azure-face-api.key'), config('azure-face-api.region'));
        });
    }
    /**
     * Merges user's and paypal's configs.
     *
     * @return void
     */
    private function mergeConfig()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/azure-face-api.php',
            'azure-face-api'
        );
    }

    /**
     * Get the services provided by the provider.
     */
    public function provides()
    {
        return [LaravelAzureFaceApi::class];
    }
}