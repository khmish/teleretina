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
    .js('resources/views/Home/App.vue', 'public/js/home-app.js')
    .js('resources/views/Pages/App.vue', 'public/js/pages-app.js')
    .js('resources/views/Home2/App.vue', 'public/js/home2-app.js')
    .js('resources/views/Home3/App.vue', 'public/js/home3-app.js')
    .js('resources/views/Report/App.vue', 'public/js/report-app.js')
    .js('resources/views/Checkup/App.vue', 'public/js/checkup-app.js')

    .sass('resources/sass/app.scss', 'public/css/app.css')

    .extract()
