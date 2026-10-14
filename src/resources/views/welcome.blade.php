<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CeLOE LMS - prototipe Learning Management System Telkom University (Kelompok 8 MieAyamJabrig).">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-light">
    <main class="container min-vh-100 d-flex flex-column justify-content-center align-items-center text-center">
        <h1 class="display-5 fw-bold">{{ config('app.name') }}</h1>
        <p class="lead text-secondary mb-4">Proyek berhasil diinisialisasi. Fitur akan ditambahkan pada tahap berikutnya.</p>
        <ul class="list-inline text-secondary small mb-0">
            <li class="list-inline-item"><span class="badge text-bg-success">Laravel {{ app()->version() }}</span></li>
            <li class="list-inline-item"><span class="badge text-bg-primary">PHP {{ PHP_VERSION }}</span></li>
            <li class="list-inline-item"><span class="badge text-bg-secondary">Bootstrap 5</span></li>
        </ul>
    </main>
</body>
</html>
