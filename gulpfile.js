var elixir = require('laravel-elixir'),
    bower_dir = 'vendor/bower_components/';

elixir(function(mix) {
    mix.copy(bower_dir + 'bootstrap/fonts', 'public/fonts');
    mix.copy(bower_dir + 'font-awesome/fonts', 'public/fonts');

    mix.copy(bower_dir + 'bootstrap/dist/js/bootstrap.js', 'resources/assets/js');
    mix.copy(bower_dir + 'jquery/dist/jquery.js', 'resources/assets/js');

    mix.scripts([
        'jquery.js',
        'bootstrap.js',
        'custom.js'
    ], 'public/js/scripts.js');

    mix.less('app.less');
});