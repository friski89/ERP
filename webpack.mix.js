const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js').sourceMaps();

mix.js('resources/js/backend.js', 'public/js').sourceMaps();

mix.css('resources/css/app.css', 'public/css').sourceMaps();
