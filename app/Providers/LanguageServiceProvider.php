<?php

namespace App\Providers;

use Illuminate\Support\Carbon;
use Illuminate\Support\ServiceProvider;

class LanguageServiceProvider extends ServiceProvider
{
    /**
     * Associate a locale to a Linux locale name for PHP's `setlocale` function.
     *
     * @var array
     */
    protected $systemLocales = [
        'en' => [
            'en_US.UTF-8',
            'en_US.utf8',
            'en_US',
            'en',
        ],
    ];

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        $locale = $this->app->getLocale();
        $system = $this->systemLocales[$locale];

        if (! setlocale(LC_ALL, ...$system)) {
            throw new \Exception(implode(', ', $system) . 'locales are not installed on your machine.');
        }

        // https://carbon.nesbot.com/docs/#api-localization
        Carbon::setLocale($locale);
        Carbon::setUtf8(true);
    }
}
