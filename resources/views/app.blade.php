<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Pedidos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gray-100">

    <nav class="bg-blue-500 p-4 text-white">
        <div class="container mx-auto flex justify-between">
            <a href="{{ route('home') }}" class="font-bold text-lg">Lanchonete</a>
            <ul class="flex gap-4">
                <li><a href="{{ route('clientes') }}" class="hover:underline">Clientes</a></li>
                <li><a href="{{ route('produtos') }}" class="hover:underline">Produtos</a></li>
                <li><a href="{{ route('funcionarios') }}" class="hover:underline">Funcionários</a></li>
                <li><a href="{{ route('administradores') }}" class="hover:underline">Administradores</a></li>
                <li><a href="{{ route('pedidos') }}" class="hover:underline">Pedidos</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mx-auto p-4">
        @yield('content')
    </div>

    @livewireScripts
</body>
</html>
