let mix = require('laravel-mix')

const sourcePath = 'resources/assets';
const distPath = 'web/assets';

mix.extract([
        'jquery'
    ])
    .autoload({
        jquery: ['$', 'window.jQuery',"jQuery","window.$","jquery","window.jquery"]
    });


mix.setPublicPath(distPath);

mix
    .js(sourcePath + '/js/app.js', 'js')
    .sass(sourcePath + '/sass/app.scss', 'css')
    .options({
        processCssUrls: false
    })

    .copyDirectory(sourcePath + '/images', distPath + '/images')
    .copyDirectory(sourcePath + '/fonts', distPath + '/fonts')


if (mix.inProduction()) {
    mix.webpackConfig({
        module: {
            rules: [{
                test: /\.js?$/,
                exclude: /node_modules\/(?!(foundation-sites)\/).*/,
                use: [{
                    loader: 'babel-loader',
                    options: mix.config.babel()
                }]
            }]
        }
    })

    mix.version()
} else {
    mix.sourceMaps()
}


mix.browserSync({
    open: false,
    proxy: 'localhost:8000',
    host: 'localhost',
    injectChanges: true,
    logSnippet: true,
    files: [
        'templates/**/*.twig',
        sourcePath + '/js/**/*.jsx',
        distPath + '/css/app.css',
        distPath + '/assets/js/**/*.js'
    ],
    port: 80
})
