const { mix } = require('laravel-mix');

mix

.options({
    publicPath: 'public/'
})

.js('resources/js/app.js', 'js/')

.sass('resources/scss/app.scss', 'css/');