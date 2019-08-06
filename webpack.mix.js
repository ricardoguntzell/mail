const mix = require('laravel-mix');

mix
/** Assets Admin */

    .sass('resources/views/web/assets/scss/custom-web/style.scss', 'public/backend/assets/css/style.css')

    .styles([
        'node_modules/bootstrap/dist/css/bootstrap.css',
        'node_modules/bootstrap-select/dist/css/bootstrap-select.css',
        'node_modules/@fortawesome/fontawesome-free/css/all.css',
    ], 'public/backend/assets/css/libs.css')

    .scripts([
        'node_modules/jquery/dist/jquery.min.js'
    ], 'public/backend/assets/js/jquery.js')

    .scripts([
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js',
        'node_modules/bootstrap-select/dist/js/bootstrap-select.js',
        'node_modules/bootstrap-select/dist/js/i18n/defaults-pt_BR.min.js',
         'node_modules/jquery-mask-plugin/dist/jquery.mask.js',
    ], 'public/backend/assets/js/libs.js')

    .scripts([
        'resources/views/web/assets/js/scripts.js'
    ], 'public/backend/assets/js/scripts.js')

    .copyDirectory('resources/views/web/assets/fonts', 'public/backend/assets/fonts')

    .copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/backend/assets/webfonts')

    .options({
        processCssUrls: false
    })

    .version()
;

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
