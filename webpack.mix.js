const mix = require('laravel-mix')
const tailwindcss = require('tailwindcss')
require('laravel-mix-purgecss')

mix.options({
    processCssUrls: false,
    postCss: [tailwindcss('./tailwind.js')],
})
    .sass('resources/assets/sass/app.sass', 'public/css')
    .js('resources/assets/js/app.js', 'public/js')
    .purgeCss()
    .extract(['axios', 'vue'])
    .version()
