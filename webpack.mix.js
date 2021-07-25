const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
<<<<<<< HEAD
 | for your Laravel application. By default, we are compiling the Sass
=======
 | for your Laravel applications. By default, we are compiling the CSS
>>>>>>> 719fd9a4cd33e912b1baf23176f06f76229fa9ed
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
<<<<<<< HEAD
    .vue()
    .sass('resources/sass/app.scss', 'public/css');
=======
    .postCss('resources/css/app.css', 'public/css', [
        require("tailwindcss"),
    ]);
>>>>>>> 719fd9a4cd33e912b1baf23176f06f76229fa9ed
