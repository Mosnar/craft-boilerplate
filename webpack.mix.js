let mix = require('laravel-mix')

mix.webpackConfig({
    externals: {
        'jquery': 'Vue',
        'vue-router': 'VueRouter',
        'vuex': 'Vuex',
        'axios': 'axios'
    }
});

const sourcePath = 'resources/assets';
const distPath = 'web/assets';

mix.setPublicPath(distPath);


mix.options({
    sourcemaps: 'source-map',
    uglify: {
        sourceMap: true,
        uglifyOptions: {
            sourceMap: true,
            compress: {
                warnings: false,
                drop_console: true,
            },
            output: {
                comments: false
            }
        }
    }
});


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
    proxy: 'web',
    host: 'localhost',
    injectChanges: true,
    logSnippet: true,
    files: [
        'resources/templates/**/*.twig',
        'resources/js/**/*.jsx',
        'public/assets/css/app.css',
        'public/assets/js/**/*.js'
    ],
    port: 80
})
