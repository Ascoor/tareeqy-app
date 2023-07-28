// webpack.mix.js
const mix = require('laravel-mix');

mix.copy('resources/fonts/tarwatamarra-arabic.ttf', 'public/fonts'); // Copy the font file

mix.postCss('resources/css/app.css', 'public/css', [
    //
]);

mix.styles([
    'resources/css/custom.css',
], 'public/css/custom.css'); // Include your custom CSS file
