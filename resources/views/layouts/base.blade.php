<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description', 'blackmog - Full Stack Developer. Portfolio de projetos Laravel, Vue.js e Tailwind CSS.')">
    <meta name="keywords" content="desenvolvedor full stack, laravel, vue.js, tailwind, portfolio">
    <meta name="author" content="blackmog">
    
    <!-- Open Graph -->
    <meta property="og:title" content="@yield('title', 'blackmog')">
    <meta property="og:description" content="@yield('description', 'Full Stack Developer')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    
    <title>@yield('title', 'blackmog - Full Stack Developer')</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    @include('components.navbar')
    
    <main>
        @yield('conteudo')
    </main>
    
    @include('components.footer')
</body>
</html>
