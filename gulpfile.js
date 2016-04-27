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
    mix.sass('main.scss');
});

elixir(function(mix) {
    mix.browserify('app.js');
});

elixir(function(mix) {
    mix.browserSync({
        proxy: 'local.chris.mccluskey.us'
    });
});

elixir(function(mix) {
    mix.copy('node_modules/normalize.css/normalize.css', 'resources/assets/sass/vendor/_normalize.css');
});
