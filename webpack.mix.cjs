const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js")
    .sass("resources/scss/core.scss", "public/admin/css")
    .sourceMaps();
