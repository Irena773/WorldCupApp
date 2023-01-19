const mix = require('laravel-mix');


mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

mix.js('resources/js/worldcup.js', 'public/js')
    .copy('resources/js/worldcup.js', 'public/js')    
    .vue();

mix.js('resources/js/bootstrap.js', 'public/js');
