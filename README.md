[![Build Status](https://travis-ci.org/benjamincrozat/laravel-boilerplate.svg?branch=master)](https://travis-ci.org/benjamincrozat/laravel-boilerplate)
[![Latest Stable Version](https://poser.pugx.org/benjamincrozat/laravel-boilerplate/v/stable)](https://packagist.org/packages/benjamincrozat/laravel-boilerplate)
[![Total Downloads](https://poser.pugx.org/benjamincrozat/laravel-boilerplate/downloads)](https://packagist.org/packages/benjamincrozat/laravel-boilerplate)
[![License](https://poser.pugx.org/benjamincrozat/laravel-boilerplate/license)](https://packagist.org/packages/benjamincrozat/laravel-boilerplate)

# Laravel Boilerplate

![](https://user-images.githubusercontent.com/3613731/47615584-030c3b80-dab1-11e8-9912-929a3aee618f.png)

**Opinionated way** to start a new Laravel project.

## Why?

I just got tired of repeating the same things over and over. I made this repository public, because why not?

## What's included

In addition to code clean up, I added or removed dependencies both in the front and the back end.

### Back end

- [benjamincrozat/laravel-blade-sugar](https://packagist.org/packages/benjamincrozat/laravel-blade-sugar), too add handy new Blade directives;
- [codedungeon/phpunit-result-printer](https://packagist.org/packages/codedungeon/phpunit-result-printer), for a prettier PHPUnit display in your console;
- [laravel/dusk](https://packagist.org/packages/laravel/dusk), for easy browser testing;
- [laravel/homestead](https://packagist.org/packages/laravel/homestead), if you don't want to use Valet or Docker;
- [laravel/nova](https://packagist.org/packages/laravel/nova), to quickly set up a powerful and beautiful admin panel;
- [laravel/telescope](https://packagist.org/packages/laravel/telescope), to help you debug and optimize your application;
- [nothingworks/blade-svg](https://packagist.org/packages/nothingworks/blade-svg), to make it easy working with SVGs;
- [predis/predis](https://packagist.org/packages/predis/predis), which is used by Laravel if the native extension isn't present;
- [shipping-docker/vessel](https://packagist.org/packages/shipping-docker/vessel), if you don't want to use Valet or Vagrant.

### Front end

I removed the jQuery and Bootstrap stuff, kept [Vue.js](https://vuejs.org/) and [Axios](https://github.com/axios/axios) and added [Tailwind CSS](https://tailwindcss.com/). The [Mix configuration](/webpack.mix.js) can strip all unused styles when compiling for production, which dramatically reduce file size!

## Usage

```bash
composer create-project benjamincrozat/laravel-boilerplate example
```

## License

[MIT](http://opensource.org/licenses/MIT)
