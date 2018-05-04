[![Build Status](https://travis-ci.org/benjamincrozat/laravel-boilerplate.svg?branch=master)](https://travis-ci.org/benjamincrozat/laravel-boilerplate)
[![Latest Stable Version](https://poser.pugx.org/benjamincrozat/laravel-boilerplate/v/stable)](https://packagist.org/packages/benjamincrozat/laravel-boilerplate)
[![Total Downloads](https://poser.pugx.org/benjamincrozat/laravel-boilerplate/downloads)](https://packagist.org/packages/benjamincrozat/laravel-boilerplate)
[![License](https://poser.pugx.org/benjamincrozat/laravel-boilerplate/license)](https://packagist.org/packages/benjamincrozat/laravel-boilerplate)

# Laravel Boilerplate

Opinionated way to start a new Laravel project.

## Why?

I just got tired of repeating the same things over and over!

## What's included

In addition to code clean up, I added/updated and removed some dependencies, both in the front and the back end.

### Back end

- *predis/predis*, which is used by Laravel if the native extension isn't present;
- *barryvdh/laravel-ide-helper*, to help you out digging the source code and enjoy a better autocompletion;
- *codedungeon/phpunit-result-printer*, for a prettier PHPUnit display in your console;
- *itsgoingd/clockwork*, to help you debug and optimize your application;
- *laravel/dusk*, for easy browser testing;
- *laravel/homestead*, if you don't want to use Valet or Docker;
- *shipping-docker/vessel*, if you don't want to use Valet or Vagrant.

I also removed the `Test` namespace to simplifify the code in that part. I still can't see why it's useful.

### Front end

I removed jQuery/Bootstrap stuff, kept [Vue.js](https://vuejs.org/), [Axios](https://github.com/axios/axios) and added [Tailwind CSS](https://tailwindcss.com/). My [Mix configuration](/webpack.mix.js) can strip all unused CSS when compiling for production. You can end up with ~10 Ko CSS!

## Usage

```bash
composer create-project benjamincrozat/laravel-boilerplate example
```

Then, it's just like any fresh Laravel project.

## License

[MIT](http://opensource.org/licenses/MIT)
