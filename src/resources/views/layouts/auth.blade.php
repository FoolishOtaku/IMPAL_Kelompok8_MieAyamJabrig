<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CeLOE LMS - Portal Pembelajaran Digital Telkom University">
    <title>@yield('title', 'Masuk ke Akun') | {{ config('app.name', 'CeLOE LMS') }}</title>

    <!-- Google Fonts: Plus Jakarta Sans for the modern academic aesthetic in Login Page.jpeg -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body class="auth-body">
    <!-- Atmospheric Ambient Glow Overlays -->
    <div class="ambient-glow glow-top-left" aria-hidden="true"></div>
    <div class="ambient-glow glow-bottom-right" aria-hidden="true"></div>

    <div class="auth-viewport">
        <!-- Top Header Bar -->
        <header class="auth-top-header">
            <div class="brand-badge">
                <span class="brand-acronym">LMS</span>
                <span class="brand-divider"></span>
                <div class="brand-tagline-stacked">
                    <span>LEARNING</span>
                    <span>MANAGEMENT SYSTEM</span>
                </div>
            </div>

            <div class="security-badge">
                <svg class="icon-shield" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    <path d="m9 12 2 2 4-4"/>
                </svg>
                <span>Secure learning portal</span>
            </div>
        </header>

        <!-- Main Content Area -->
        <main class="auth-main-content">
            @yield('content')
        </main>

        <!-- Subtle Bottom Watermark -->
        <footer class="auth-bottom-footer">
            <span class="watermark-text">LMS</span>
        </footer>
    </div>

    <!-- Modals rendered outside viewport stacking context -->
    @yield('modals')

    @stack('scripts')
</body>
</html>
