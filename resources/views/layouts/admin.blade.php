<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Painel') - LLStar</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="manifest" href="/site.webmanifest">
    @vite(['resources/css/admin.css', 'resources/js/admin.js'])
</head>
<body>
    <div class="page">
        <aside class="navbar navbar-vertical navbar-expand-lg navbar-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1 class="navbar-brand navbar-brand-autodark">
                    <a href="{{ route('dashboard') }}">LLStar</a>
                </h1>
                <div class="collapse navbar-collapse" id="sidebar-menu">
                    <ul class="navbar-nav pt-lg-3">
                        @foreach($menu as $item)
                            @if(isset($item['children']))
                                @php $childActive = collect($item['children'])->contains(fn($child) => isset($child['route']) && request()->routeIs($child['route'])); @endphp
                                <li class="nav-item dropdown {{ $childActive ? 'active' : '' }}">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false">
                                        <span class="nav-link-title">{{ $item['label'] }}</span>
                                    </a>
                                    <div class="dropdown-menu {{ $childActive ? 'show' : '' }}">
                                        <div class="dropdown-menu-columns">
                                            <div class="dropdown-menu-column">
                                                @foreach($item['children'] as $child)
                                                    <a class="dropdown-item {{ isset($child['route']) && request()->routeIs($child['route']) ? 'active' : '' }}"
                                                       href="{{ isset($child['route']) && Route::has($child['route']) ? route($child['route']) : '#' }}">
                                                        {{ $child['label'] }}
                                                    </a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @else
                                <li class="nav-item {{ request()->routeIs($item['route']) ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route($item['route']) }}">
                                        <span class="nav-link-title">{{ $item['label'] }}</span>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </aside>

        <div class="page-wrapper">
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <h2 class="page-title">@yield('title', 'Dashboard')</h2>
                        </div>
                        <div class="col-auto ms-auto d-print-none">
                            <div class="d-flex gap-2">
                                <a href="{{ route('profile.edit') }}" class="btn btn-outline-secondary">Perfil</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger">Sair</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-body">
                <div class="container-xl">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
</html>