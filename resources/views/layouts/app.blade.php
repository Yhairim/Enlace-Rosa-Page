<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Enlace Rosa')</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    {{-- logos arriba --}}
    @include('components.header')

    {{-- barra rosa --}}
    @include('components.navbar')

    <main class="page-shell">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('components.footer')

</body>
</html>
