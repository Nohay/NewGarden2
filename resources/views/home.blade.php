<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>New Garden</title>
        <!-- Styles
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}"> -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
        <script defer src="{{ mix('js/app.js') }}"></script>
    </head>
    <body style="font-family: Source;">
    <main>
        <div id="app">
            <heady style="z-index: 2; position: fixed; background-color: #f8fafc; width: 100%;"></heady>
            <parallax1 style="z-index: 1; background-color: white;"></parallax1>
            <transition1></transition1>
            <parallax2 style="z-index: -1;"></parallax2>
            <transition2></transition2>
            <parallax3 style="z-index: 1; background-color: white;"></parallax3>
            <transition3></transition3>
            <parallax4 style="z-index: 1; background-color: white;"></parallax4>
        </div>
        </main>
    </body>
</html>