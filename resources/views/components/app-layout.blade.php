<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DM Sport - Dashboard Financiero</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-b from-lime-300 to-yellow-300">
    <div class="min-h-screen text-gray-900">
        <main class="p-4">
            {{ $slot }}
        </main>
    </div>
</body>
</html>