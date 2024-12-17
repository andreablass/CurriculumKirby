<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ site()->title() }} | {{  page()->title() }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-navigation.header title="Header" />
    <main>
        {{ $slot }}
    </main>    
    <x-footer.footer title="Footer" />
</body>
</html>
