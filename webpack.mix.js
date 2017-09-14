let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
    .copy('node_modules/element-ui/lib/theme-default', 'public/css/element-theme')
    .copy('node_modules/fullcalendar/dist/fullcalendar.css', 'public/css/fullcalendar/fullcalendar.css')
    .copy('node_modules/fullcalendar/dist/locale', 'public/css/fullcalendar/locale')
   .sass('resources/assets/sass/app.scss', 'public/css');
