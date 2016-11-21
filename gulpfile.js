const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

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

elixir(function (mix) {
    mix.scripts(
        [
            // jQuery
            'jquery.js',
            // bootstrap
            'bootstrap.min.js',
            // plugins
            'plugins/dataTables/jquery.dataTables.js',
            'plugins/dataTables/dataTables.tableTools.min.js',
            'plugins/dataTables/dataTables.buttons.min.js',
            'plugins/dataTables/buttons.print.min.js',
            'plugins/dataTables/buttons.colVis.min.js',
            'plugins/dataTables/dataTables.responsive.js',
            'plugins/dataTables/dataTables.bootstrap.js',
        ],
        'public/js/plugins.js'
    );


    mix.scripts([
            'modules/schedule.js',
        ],
        'public/js/modules/schedule.js'
    );

    mix.styles([
        "plugins/dataTables/buttons.dataTables.min.css",
        "plugins/dataTables/datatables.min.css"
        ],
        'public/css/plugins.css'
    );

    mix.styles([
        "app.css"
        ],
        'public/css/app.css'
    );

    mix.copy('resources/assets/css', 'public/css/');
    mix.copy('resources/assets/font-awesome', 'public/font-awesome/');
    mix.copy('resources/assets/fonts', 'public/fonts/');
});