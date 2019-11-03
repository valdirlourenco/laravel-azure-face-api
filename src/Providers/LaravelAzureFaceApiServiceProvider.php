<?php
namespace SmartDog23\LaravelAzureFaceApi\Providers;
/*
 * Class LaravelAzureFaceApiServiceProvider
 * @package SmartDog23\LaravelAzureFaceApi
 */
use Illuminate\Support\ServiceProvider;
use SmartDog23\LaravelAzureFaceApi\Facades\LaravelAzureFaceApi;

class LaravelAzureFaceApiServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Publish config files
        $this->publishes([
            __DIR__.'/../../config/config.php' => config_path('azure-face-api.php'),
        ]);
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerAzureFaceApi();
        $this->mergeConfig();
    }
    /**
     * Register the application bindings.
     *
     * @return void
     */
    private function registerAzureFaceApi()
    {
        $this->app->singleton(LaravelAzureFaceApi::class, function ($app) {
            return new LaravelAzureFaceApi(config('azure-face-api.key'), config('azure-face-api.region'));
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
     *
     * @return array
     */
    public function provides()
    {
        return [LaravelAzureFaceApi::class];
    }
}