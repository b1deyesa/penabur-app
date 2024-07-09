<html>
    <head>
        <title>Penabur Computech</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="{{ $class }}">
        {{ $slot }}
    </body>
</html>