<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
    <title>DC Comics - @yield("pagetitle", "Default")</title>
    @vite('resources/js/app.js')
</head>

<body>
    @include("partials.header")
    <main>
        @yield("content")
    </main>
    @include("partials.footer")
</body>

</html>