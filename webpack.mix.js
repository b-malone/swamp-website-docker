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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

mix.copy('resources/js/jquery-ui.js', 'public/js/jquery-ui.js');
mix.copy('resources/sass/jquery-ui.css', 'public/css/jquery-ui.css');

mix.copyDirectory('resources/assets', 'public/assets');
mix.copyDirectory('resources/img', 'public/img');
mix.copyDirectory('resources/sass/images', 'public/css/images');

mix.copyDirectory('resources/documents/', 'public/content/documents/');
mix.copyDirectory('resources/forms/', 'public/content/forms/');
mix.copyDirectory('resources/maps/', 'public/content/maps/');
