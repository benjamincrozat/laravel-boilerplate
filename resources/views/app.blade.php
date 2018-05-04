<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property="og:site_name" content="{{ config('app.name') }}">
        <meta property="og:type" content="website">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:creator" content="@benjamincrozat">
        <meta name="twitter:site" content="@benjamincrozat">
        <meta name="description" content="{{ $description or '' }}">
        <meta property="og:title" content="{{ $title_tag or config('app.name') }}">
        <meta property="og:description" content="{{ $description or '' }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ $image or '' }}">
        <meta name="twitter:title" content="{{ $title_tag or config('app.name') }}">
        <meta name="twitter:description" content="{{ $description or '' }}">
        <meta name="twitter:image" content="{{ $image or '' }}">
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
