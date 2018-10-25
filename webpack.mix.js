let mix = require('laravel-mix');

mix.js([
    'resources/assets/js/app.js',
    'node_modules/bootstrap-sass-datepicker/js/locales/bootstrap-datepicker.ru.js',
    'node_modules/fullcalendar/dist/locale/ru.js'
], 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .scripts(['public/js/my.js'], 'public/js/main.js');