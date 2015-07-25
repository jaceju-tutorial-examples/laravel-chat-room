'use strict';

process.env.DISABLE_NOTIFIER = true;

var elixir = require('laravel-elixir');
require('laravel-elixir-wiredep');
require('laravel-elixir-browser-sync');
require('laravel-elixir-serve');
require('laravel-elixir-sync');
require('laravel-elixir-jshint');
require('laravel-elixir-clean');
require('laravel-elixir-useref');

elixir(function (mix) {
    mix.clean()
        .sass('*.scss')
        .wiredep()
        .jshint()
        .sync('resources/assets/js/**/*.js', 'public/js');

    if (elixir.config.production) {
        mix.useref({ src: false })
            .version(['js/*.js', 'css/*.css'])
    }
});
