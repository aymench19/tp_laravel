const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   .css('resources/css/app.css', 'public/css')
   .options({
       processCssUrls: false
   })
   .babelConfig({
       presets: ['@babel/preset-env']
   })
   .sourceMaps();
