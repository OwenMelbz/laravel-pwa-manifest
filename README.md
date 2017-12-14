# Laravel 5.4+ PWA Manifest Helper

This helps automatically generate a basic PWA style manifest which will help devices install your website to their homescreens, mainly to save headache of having to create these extra files yourself.

It uses browser detection to include the approprite meta e.g Chrome and Android will be provided with a JSON manifest, whilst other browsers will be provided with the meta tags.

## Usage

1. Install via composer `composer require owenmelbz/laravel-pwa-manifest`

2. Register the service provider (if the auto discovery does not work) - typically done inside the `app.php` providers array e.g `OwenMelbz\PwaManifest\PwaManifestServiceProvider::class`

3. Publish the package via `php artisan vendor:publish --provider="OwenMelbz\PwaManifest\PwaManifestServiceProvider"`

4. Configure the `config/pwa_manifest.php` to your liking, including your app name, colours themes etc.

5. Include within your `<head>` the blade directive `@pwaManifest` this should include the appropriate manifest per device/browser.

## Launcher images

If you provide a single source image within the `icon` key - we will automatically generate and cache the icon sizes for you. Simply add your source file to somewhere accessible and we'll do the rest for you.

If you want to define your own set of 3 icons, then simply set the `icon` key to either `null` or `false`, then provide the public path to your image assets.

## Disclaimer

This was built out of an experiment and is very simple and not designed to be a full replacement for custom manifests, feel free to submit any PR enhancements that you feel like :)
