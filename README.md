[![Build Status](https://travis-ci.org/benjamincrozat/laravel-boilerplate.svg?branch=master)](https://travis-ci.org/benjamincrozat/laravel-boilerplate)
[![Latest Stable Version](https://poser.pugx.org/benjamincrozat/laravel-boilerplate/v/stable)](https://packagist.org/packages/benjamincrozat/laravel-boilerplate)
[![Total Downloads](https://poser.pugx.org/benjamincrozat/laravel-boilerplate/downloads)](https://packagist.org/packages/benjamincrozat/laravel-boilerplate)
[![License](https://poser.pugx.org/benjamincrozat/laravel-boilerplate/license)](https://packagist.org/packages/benjamincrozat/laravel-boilerplate)

# Laravel Boilerplate

**Opinionated way** to start a new Laravel project.

## Why?

I just got tired of repeating the same things over and over. I made this repository open source so people can stop by and provide feedback or learn things.

## What's included

In addition to code clean up, I added/updated and removed some dependencies, both in the front and the back end.

### Back end

- *algolia/algoliasearch-client-php*, to make Scout use Algolia instead of MySQL;
- *benjamincrozat/laravel-blade-sugar*, too add handy new Blade directives;
- *codedungeon/phpunit-result-printer*, for a prettier PHPUnit display in your console;
- *itsgoingd/clockwork*, to help you debug and optimize your application;
- *laravel/dusk*, for easy browser testing;
- *laravel/homestead*, if you don't want to use Valet or Docker;
- *laravel/scout*, for easy full-text search on your models;
- *laravel/socialite*, for easy one click authentication;
- *predis/predis*, which is used by Laravel if the native extension isn't present;
- *shipping-docker/vessel*, if you don't want to use Valet or Vagrant.

### Front end

I removed the jQuery and Bootstrap stuff, kept [Vue.js](https://vuejs.org/) and [Axios](https://github.com/axios/axios) and added [Tailwind CSS](https://tailwindcss.com/). The [Mix configuration](/webpack.mix.js) can strip all unused styles when compiling for production, which dramatically reduce file size!

## Usage

```bash
composer create-project benjamincrozat/laravel-boilerplate example
```

## License

[MIT](http://opensource.org/licenses/MIT)
