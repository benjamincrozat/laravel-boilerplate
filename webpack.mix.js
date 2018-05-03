
const mix = require('laravel-mix')
const tailwindcss = require('tailwindcss')
const glob = require('glob-all')
const Purgecss = require('purgecss-webpack-plugin')

class TailwindExtractor {
    static extract(content) {
        return content.match(/[A-z0-9-:\/]+/g) || []
    }
}

mix.options({
    processCssUrls: false,
    postCss: [tailwindcss('./tailwind.js')],
})
    .sass('resources/assets/sass/app.sass', 'public/css')
    .js('resources/assets/js/app.js', 'public/js')
    .extract(['axios', 'vue'])
    .version()

if (mix.inProduction()) {
    mix.webpackConfig({
        plugins: [
            new Purgecss({
                paths: glob.sync([
                    path.join(__dirname, 'resources/views/**/*.blade.php'),
                    path.join(__dirname, 'resources/assets/js/**/*.vue')
                ]),
                extractors: [
                    {
                        extractor: TailwindExtractor,
                        extensions: ['html', 'js', 'php', 'vue']
                    }
                ]
            })
        ]
    })
}
