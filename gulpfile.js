var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('style.scss');
});

/*elixir(function(mix) {
    mix.browserify('app.js');
});*/

elixir(function(mix) {
    mix.browserSync({
        proxy: 'chris.mccluskey.us'
    });
});

elixir(function(mix) {
    mix.copy('resources/assets/images', 'public/img');
    mix.copy('resources/assets/svg',    'public/svg');
});
