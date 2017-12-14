<?php return [

    /*
    |--------------------------------------------------------------------------
    | What's the full name of your application?
    |--------------------------------------------------------------------------
    */

    'name' => env('APP_NAME', 'My PWA App'),

    /*
    |--------------------------------------------------------------------------
    | What should we display on the home screen?
    |--------------------------------------------------------------------------
    */

    'short_name' => 'PWA',

    /*
    |--------------------------------------------------------------------------
    | What is the start screen url when the app is launched from the homescreen?
    |--------------------------------------------------------------------------
    */

    'start_url' => '?launcher=true',

    /*
    |--------------------------------------------------------------------------
    | If you set only the "icon" we will automatically generate the correct sizes
    | based off your source image, typically around 512x512 is nice.
    | If you want your own icons, set this to a falsy value.
    |--------------------------------------------------------------------------
    */

    'icon' => 'launcher.png',

    /*
    |--------------------------------------------------------------------------
    | If you're not automatically generating the icons, you can define them all here.
    | Remember: If you want to use these, then make sure "icon" is falsy.
    |--------------------------------------------------------------------------
    */

    'icons' => [
        '48x48' => 'assets/img/launcher-1.png',
        '96x96' => 'assets/img/launcher-2.png',
        '192x192' => 'assets/img/launcher-3.png',
    ],

    /*
    |--------------------------------------------------------------------------
    | Sets the background colour for the launch screen.
    |--------------------------------------------------------------------------
    */

    'background_color' => '#2196f3',

    /*
    |--------------------------------------------------------------------------
    | Sets the theme colour
    |--------------------------------------------------------------------------
    */

    'theme_color' => '#2196f3',

    /*
    |--------------------------------------------------------------------------
    | Should we display in "browser" or "standalone" mode?
    |--------------------------------------------------------------------------
    */

    'display' => 'standalone',

];
