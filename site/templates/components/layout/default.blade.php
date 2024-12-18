<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ site()->title() }} | {{  page()->title() }}</title>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-navigation.header title="Header" />
    <x-navigation.menu title="Menú" />
    <main>
        {{ $slot }}
    </main>    
    <x-footer.footer title="Footer" />
</body>
</html>
