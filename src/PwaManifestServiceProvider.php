<?php

namespace OwenMelbz\PwaManifest;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

/**
 * Service provider for PwaManifest
 *
 * @author: Owen Melbourne
 */
class PwaManifestServiceProvider extends ServiceProvider {

    /**
     * This will be used to register config & view
     */
    protected $packageName = 'pwa_manifest';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Publish the config
        $this->publishes([
            __DIR__ . '/config/config.php' => config_path($this->packageName . '.php'),
        ]);

        // Load the routes
        $this->loadRoutesFromLegacy(__DIR__ . '/routes.php');

        // Load the views
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'pwa_manifest');

        // We load the blade directive for nofollow/noindex meta tag
        Blade::directive('pwaManifest', function () {
            return "<?php echo (new \OwenMelbz\PwaManifest\PwaManifestMeta)->render(); ?>";
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom( __DIR__.'/config/config.php', $this->packageName);
    }

    protected function resource_path($filename)
    {
        if (function_exists('resource_path')) {
            return resource_path($filename);
        }

        return app_path('resources/' . trim($filename, '/'));
    }

    protected function loadRoutesFromLegacy($path)
    {
        if (method_exists($this, 'loadRoutesFrom')) {
            return $this->loadRoutesFrom($path);
        }

        if (! $this->app->routesAreCached()) {
            require $path;
        }
    }

}
