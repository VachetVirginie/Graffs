<?php return [

    /*
    |--------------------------------------------------------------------------
    | What's the full name of your application?
    |--------------------------------------------------------------------------
    */

    'name' => env('APP_NAME', 'Lyon Street Graff'),

    /*
    |--------------------------------------------------------------------------
    | What should we display on the home screen?
    |--------------------------------------------------------------------------
    */

    'short_name' => 'LSG',

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

    'icon' => 'logo.png',

    /*
    |--------------------------------------------------------------------------
    | If you're not automatically generating the icons, you can define them all here.
    | Remember: If you want to use these, then make sure "icon" is falsy.
    |--------------------------------------------------------------------------
    */

    'icons' => [
        '48x48' => 'img/logo.png',
        '96x96' => 'img/logo.png',
        '192x192' => 'img/logo.png',
    ],

    /*
    |--------------------------------------------------------------------------
    | Sets the background colour for the launch screen.
    |--------------------------------------------------------------------------
    */

    'background_color' => '#000000',

    /*
    |--------------------------------------------------------------------------
    | Sets the theme colour
    |--------------------------------------------------------------------------
    */

    'theme_color' => '#000000',

    /*
    |--------------------------------------------------------------------------
    | Should we display in "browser" or "standalone" mode?
    |--------------------------------------------------------------------------
    */

    'display' => 'standalone',

];
