[![Latest Stable Version](https://poser.pugx.org/benjamincrozat/laravel-boilerplate/v/stable)](https://packagist.org/packages/benjamincrozat/laravel-boilerplate)
[![Total Downloads](https://poser.pugx.org/benjamincrozat/laravel-boilerplate/downloads)](https://packagist.org/packages/benjamincrozat/laravel-boilerplate)
[![License](https://poser.pugx.org/benjamincrozat/laravel-boilerplate/license)](https://packagist.org/packages/benjamincrozat/laravel-boilerplate)

# Laravel Boilerplate

![](https://user-images.githubusercontent.com/3613731/64422023-553fc500-d0a3-11e9-8bcf-262ac08da526.png)

**Opinionated way** to start a new Laravel project.

## Why?

I just got tired of repeating the same things over and over. I made this repository public, because why not?

## What's included

In addition to code clean up, I added or removed dependencies both in the front and the back end.

### Back end

- [benjamincrozat/laravel-blade-sugar](https://packagist.org/packages/benjamincrozat/laravel-blade-sugar), to add handy new Blade directives;
- [codedungeon/phpunit-result-printer](https://packagist.org/packages/codedungeon/phpunit-result-printer), for a prettier PHPUnit display in your console;
- [laravel/dusk](https://packagist.org/packages/laravel/dusk), for easy browser testing;
- [laravel/homestead](https://packagist.org/packages/laravel/homestead), if you don't want to use Valet or Docker;
- [laravel/nova](https://packagist.org/packages/laravel/nova), to quickly set up a powerful and beautiful admin panel;
- [laravel/telescope](https://packagist.org/packages/laravel/telescope), to help you debug and optimize your application;
- [shipping-docker/vessel](https://packagist.org/packages/shipping-docker/vessel), if you don't want to use Valet or Vagrant.

### Front end

I removed the jQuery and Bootstrap, kept [Vue.js](https://vuejs.org/) and [Axios](https://github.com/axios/axios) and added [Tailwind CSS](https://tailwindcss.com/). The [Mix configuration](/webpack.mix.js) can strip all unused styles when compiling for production, which dramatically reduce file size!

## Usage

```bash
composer create-project benjamincrozat/laravel-boilerplate example
```

## License

[MIT](http://opensource.org/licenses/MIT)
