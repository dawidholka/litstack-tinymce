const mix = require("laravel-mix");

mix.js("js/litstack-tinymce.js", "public/js");

console.log(path.resolve(__dirname, '/vendor/litstack/litstack/resources/js/'));

mix.webpackConfig({
    resolve: {
        alias: {
            '@lit-js': path.resolve(__dirname, 'vendor/litstack/litstack/resources/js/'),
            '@lit-sass': path.resolve(__dirname, 'vendor/litstack/litstack/resources/sass/'),
        },
    },
});