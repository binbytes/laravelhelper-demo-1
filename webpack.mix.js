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

mix.js([
    'resources/js/app.js',
    'resources/js/dashboard.js',
    'resources/js/require.min.js',
    'resources/js/vendors/bootstrap.bundle.min',
    'resources/js/vendors/jquery.sparkline.min',
    'resources/js/vendors/selectize.min',
    'resources/js/vendors/jquery.tablesorter.min',
    'resources/js/vendors/jquery-jvectormap-2.0.3.min',
    'resources/js/vendors/jquery-jvectormap-de-merc',
    'resources/js/vendors/jquery-jvectormap-world-mill',
    'resources/js/vendors/circle-progress.min',
    'resources/plugins/datatables/datatables.js',
    'resources/plugins/datatables/plugin.js',
], 'public/js/app.js')
    .copy(['resources/css/app.css',
        'node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.css',
        'resources/plugins/datatables/datatables.css'
    ], 'public/css');
