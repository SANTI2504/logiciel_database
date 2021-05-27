const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    'resources/css/app/style.min.css',
    'resources/css/app/style.min1.css',
    'resources/css/app/font-awesome.min.css',
    'resources/css/app/perfect-scrollbar.min.css',
    'resources/css/app/prism.min.css',
    'resources/css/app/switchery.min.css',
    'resources/css/app/bootstrap.min.css',
    'resources/css/app/bootstrap-extended.min.css',
    'resources/css/app/colors.min.css',
    'resources/css/app/components.min.css',
    'resources/css/app/layout-dark.min.css',
    'resources/css/app/switchery.min1.css',
    'resources/css/app/style.css'
], 'public/css/app/app.css');

mix.scripts([
    'resources/js/app/vendors.min.js',
    'resources/js/app/switchery.min.js',
    'resources/js/app/app-menu.min.js',
    'resources/js/app/app.min.js',
    'resources/js/app/notification-sidebar.min.js',
    'resources/js/app/customizer.min.js',
    'resources/js/app/scroll-top.min.js',
    'resources/js/app/scripts.js'

], 'public/js/app/app.js');