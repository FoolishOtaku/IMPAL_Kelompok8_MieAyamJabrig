<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CeLOE LMS - Portal Pembelajaran Digital Telkom University">
    <title>@yield('title', 'Beranda') | {{ config('app.name', 'CeLOE LMS') }}</title>

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="dashboard-body" style="background-color: #f8fafc; font-family: 'Plus Jakarta Sans', system-ui, sans-serif; min-height: 100vh; display: flex; flex-direction: column;">

    <!-- Top Navigation Bar -->
    <nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm sticky-top py-2.5">
        <div class="container-fluid px-3 px-lg-4">
            <!-- Brand Badge -->
            <a class="navbar-brand d-flex align-items-center text-decoration-none" href="{{ route('dashboard') }}">
                <span style="font-size: 1.5rem; font-weight: 800; color: #ed1e28; letter-spacing: -0.5px; line-height: 1;">LMS</span>
                <span class="mx-2" style="width: 1.5px; height: 20px; background-color: #cbd5e1; display: inline-block;"></span>
                <div class="d-flex flex-column text-muted lh-1" style="font-size: 0.55rem; font-weight: 700; letter-spacing: 0.8px;">
                    <span>TELKOM UNIVERSITY</span>
                    <span class="text-danger" style="color: #ed1e28 !important;">CeLOE PORTAL</span>
                </div>
            </a>

            <!-- User Menu & Logout -->
            <div class="d-flex align-items-center gap-2 gap-md-3 ms-auto">
                @auth
                    <!-- Role Badge & User Info -->
                    <div class="d-flex align-items-center gap-2.5 bg-light rounded-pill px-3 py-1.5 border">
                        <div class="rounded-circle text-white d-flex align-items-center justify-content-center fw-bold"
                             style="width: 32px; height: 32px; font-size: 0.85rem; background-color: #ed1e28;">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </div>
                        <div class="d-none d-md-flex flex-column text-start lh-sm">
                            <span class="fw-semibold text-dark" style="font-size: 0.8125rem;">{{ Auth::user()->name }}</span>
                            <span class="text-muted" style="font-size: 0.72rem;">{{ Auth::user()->identifier_label }}: {{ Auth::user()->username }}</span>
                        </div>
                        <span class="badge rounded-pill fw-semibold ms-1"
                              style="background-color: #fee2e2; color: #ed1e28; font-size: 0.7rem; padding: 0.35em 0.75em;">
                            {{ Auth::user()->role_badge }}
                        </span>
                    </div>

                    <!-- Logout Button Form -->
                    <form method="POST" action="{{ route('logout') }}" class="m-0">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-danger d-flex align-items-center gap-1.5 rounded-pill px-3 py-1.5 fw-semibold" style="font-size: 0.8125rem;">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                                <polyline points="16 17 21 12 16 7"/>
                                <line x1="21" y1="12" x2="9" y2="12"/>
                            </svg>
                            <span>Keluar</span>
                        </button>
                    </form>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Main Content Container -->
    <main class="flex-grow-1 py-4">
        <div class="container-fluid px-3 px-lg-4">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-top py-3 text-center text-muted small mt-auto">
        <div class="container-fluid">
            <span>&copy; {{ date('Y') }} CeLOE LMS - Telkom University. Prototipe Implementasi Perangkat Lunak Kelompok 8.</span>
        </div>
    </footer>

    @yield('modals')
    @stack('scripts')
</body>
</html>
