<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">

        @title($title)

        <link rel="stylesheet" href="@mix('/css/app.css')">

        @if ($id = config('services.ga.tracking_id'))
            <script async src="https://www.googletagmanager.com/gtag/js?id={{ $id }}"></script>
            <script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','{{ $id }}')</script>
        @endif
    </head>
    <body>
        <div id="app"></div>

        <script src="@mix('/js/manifest.js')"></script>
        <script src="@mix('/js/vendor.js')"></script>
        <script src="@mix('/js/app.js')"></script>
    </body>
</html>
