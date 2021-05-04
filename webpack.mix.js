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
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();

mix.copy('node_modules/admin-lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js', 'public/js/bs-custom-file-input.min.js');
mix.copy('node_modules/admin-lte/plugins/select2/js/select2.full.min.js', 'public/js/select2.full.min.js');
mix.copy('node_modules/admin-lte/plugins/select2/css/select2.min.css', 'public/css/select2.min.css');
mix.copy('node_modules/admin-lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css', 'public/css/select2-bootstrap4.min.css');
mix.copy('node_modules/admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js', 'public/js/tempusdominus-bootstrap-4.min.js');
