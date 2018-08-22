const mix = require('laravel-mix')
const tailwindcss = require('tailwindcss')
require('laravel-mix-purgecss')

mix.options({
    processCssUrls: false,
    postCss: [tailwindcss('./tailwind.js')],
})
    .sass('resources/sass/app.sass', 'public/css')
    .js('resources/js/app.js', 'public/js')
    .purgeCss()
    .extract(['axios', 'vue'])
    .version()
