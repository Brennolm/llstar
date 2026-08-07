<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('code') - {{ config('app.name') }}</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    @vite(['resources/css/welcome.css', 'resources/js/welcome.js'])
</head>
<body class="d-flex align-items-center justify-content-center" style="min-height: 100vh; background: #f5f5f7;">
    <div class="container text-center">
        <div class="mb-3" style="font-size: 96px; font-weight: 700; color: #0d0d0d; line-height: 1;">
            @yield('code')
        </div>
        <h1 class="mb-3" style="font-size: 24px; font-weight: 700;">@yield('title')</h1>
        <p class="text-secondary mb-4">@yield('message')</p>
        <a href="{{ url('/') }}" class="btn btn-dark">Voltar para o início</a>
    </div>
</body>
</html>