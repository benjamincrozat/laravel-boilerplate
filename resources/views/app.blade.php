<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        {{ $meta_tags or '' }}

        <title>
            @unless(empty($title_tag))
                {{ $title_tag }} - {{ config('app.name') }}
            @else
                {{ config('app.name') }} - {{ config('app.description') }}
            @endunless
        </title>

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        {{ $link_tags or '' }}

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-xxxxxxxx-x"></script>
        <script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-xxxxxxxx-x')</script>
    </head>
    <body>
        <div id="app"></div>

        <script src="{{ mix('/js/manifest.js') }}"></script>
        <script src="{{ mix('/js/vendor.js') }}"></script>
        <script src="{{ mix('/js/app.js') }}"></script>
        {{ $script_tags or '' }}
    </body>
</html>
