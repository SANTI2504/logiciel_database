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
// creado por jetstream
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ]);

if (mix.inProduction()) {
    mix.version();
}

// creacion para plantillas
mix.styles([
    'resources/css/app/style.min.css',
    'resources/css/app/style.min1.css',
    'resources/css/app/font-awesome.min.css',
    'resources/css/app/perfect-scrollbar.min.css',
    'resources/css/app/prism.min.css',
    'resources/css/app/switchery.min.css',
    'resources/css/app/sweetalert2.min.css',
    'resources/css/app/toastr.css',
    'resources/css/app/select2.min.css',
    'resources/css/app/datatables.bootstrap4.min.css',
    'resources/css/app/bootstrap.min.css',
    'resources/css/app/bootstrap-extended.min.css',
    'resources/css/app/colors.min.css',
    'resources/css/app/components.min.css',
    'resources/css/app/layout-dark.min.css',
    'resources/css/app/switchery.min1.css',
    'resources/css/app/ex-component-sweet-alerts.min.css',
    'resources/css/app/ex-component-toastr.min.css',
    'resources/css/app/form-validation.css',
    'resources/css/app/page-invoice.min.css',
    'resources/css/app/style.css',
], 'public/css/app/app.css');

mix.scripts([
    'resources/js/app/vendors.min.js',
    'resources/js/app/switchery.min.js',
    'resources/js/app/sweetalert2.all.min.js',
    'resources/js/app/toastr.min.js',
    'resources/js/app/datatable/jquery.datatables.min.js',
    'resources/js/app/datatable/datatables.bootstrap4.min.js',
    'resources/js/app/datatable/dataTables.buttons.min.js',
    'resources/js/app/datatable/buttons.html5.min.js',
    'resources/js/app/datatable/buttons.print.min.js',
    'resources/js/app/datatable/jszip.min.js',
    'resources/js/app/datatable/pdfmake.min.js',
    'resources/js/app/datatable/vfs_fonts.js',
    'resources/js/app/select2.full.min.js',
    'resources/js/app/jqBootstrapValidation.js',
    'resources/js/app/app-menu.min.js',
    'resources/js/app/app.min.js',
    'resources/js/app/notification-sidebar.min.js',
    'resources/js/app/customizer.min.js',
    'resources/js/app/scroll-top.min.js',
    'resources/js/app/ex-component-toastr.min.js',
    'resources/js/app/ex-component-sweet-alerts.min.js',
    'resources/js/app/datatable/dt-basic-initialization.js',
    'resources/js/app/datatable/dt-advanced-initialization.js',
    'resources/js/app/select2.min.js',
    'resources/js/app/form-validation.js',
    'resources/js/app/scripts.js',
    'resources/js/app/validate.js',


], 'public/js/app/app.js');

//creacion para la landing page
mix.styles([
    'resources/css/all.css',
    'resources/css/estilos.css'

], 'public/css/landing.css');

mix.scripts([
    'resources/js/scripts.js'

], 'public/js/landing.js');
