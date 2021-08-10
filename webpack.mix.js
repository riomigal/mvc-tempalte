const mix = require('laravel-mix');
require('autoprefixer');
require('laravel-mix-purgecss');
require('laravel-mix-polyfill');

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

// @ts-ignore
mix.setPublicPath('./public')
    .js('resources/js/app.js', 'js')
  .sass('resources/scss/app.scss', 'css')
.polyfill({
        enabled: false,
        useBuiltIns: "usage",
        targets:  [
            "last 1 version",
            "> 1%",
            "IE 10"
          ],
        corejs: 3,
        debug: true,
        entryPoints: "stable",

     })
  .options({
    processCssUrls: false,
    autoprefixer: {
      options: {
        grid: 'autoplace',
        browsers: [
          'last 6 versions', 'ie 11',
        ],
      },
    },
  })
  .purgeCss(
    {
      content: ['./**/*.php','./public/**/*.js'],

    },
  )
  .version()
    .browserSync({
        proxy: 'http://127.0.0.1:19881',
        files:  ["**/*.php", "resources/views/**/*.blade.php","resources/js/*.js", "resources/scss/*.scss"]

    });