const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    /*.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles([
        'resources/assets/incss/reset.css',
        'resources/assets/incss/style.css',
        'resources/assets/vendors/flag-icon-css/css/flag-icon.min.css'
    ], 'public/css/auth.css')
    .scripts([
        'resources/assets/injs/modernizr.js',
        'resources/assets/injs/jquery-2.1.4.js',
        'resources/assets/injs/main.js',
    ], 'public/js/auth.js');*/

    .copyDirectory('resources/assets', 'public/assets');


if (mix.inProduction()) {
    mix.version();
}
