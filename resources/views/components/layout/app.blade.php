<html>
    <head>
        <title>Penabur Computech</title>
        @vite(['resources/css/app.css'])
    </head>
    <body class="{{ $class }}">
        {{ $slot }}
    </body>
</html>