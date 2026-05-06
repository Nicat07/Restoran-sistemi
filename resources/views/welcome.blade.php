<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoran Menyu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
    <h1 class="text-3xl font-bold mb-6 text-center text-orange-600">Restoran Sistemi</h1>

    @livewire('menu-component')
    <hr class="my-10">
    @livewire('kitchen-panel')
    @livewire('admin-stats')
    @livewire('table-reservation')
    @livewireScripts
</body>

</html>
