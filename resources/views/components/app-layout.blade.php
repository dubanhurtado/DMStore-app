<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DM Sport - Dashboard Financiero</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="min-h-screen bg-[#F3F4F6] text-gray-900">
        <main class="p-4">
            {{ $slot }}
        </main>
    </div>
</body>
</html>