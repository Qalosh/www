<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTRL+C — Адмін панель</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>

<header class="admin-header">
    <a href="/admin" class="admin-header__logo">
        <span class="logo-text">CTRL+C</span>
        <span class="logo-sub">ADMIN PANEL</span>
    </a>
    <nav class="admin-header__nav">
        <a href="/admin/prices" class="{{ request()->is('admin/prices*') ? 'active' : '' }}">ЦІНИ</a>
        <a href="/admin/services" class="{{ request()->is('admin/services*') ? 'active' : '' }}">ПОСЛУГИ</a>
        <a href="/admin/projects" class="{{ request()->is('admin/projects*') ? 'active' : '' }}">ПРОЕКТИ</a>
        <a href="/admin/requests" class="{{ request()->is('admin/requests*') ? 'active' : '' }}">ЗАЯВКИ</a>
        <a href="/admin/company" class="{{ request()->is('admin/company*') ? 'active' : '' }}">КОМПАНІЯ</a>
    </nav>
    <div class="admin-header__right">
        <a href="/" target="_blank">🌐 Сайт</a>
        <a href="/admin/logout" class="btn-logout">Вийти ⏻</a>
    </div>
</header>

<main class="admin-main">
    @if(session('success'))
        <div class="admin-alert">
            ✅ {{ session('success') }}
        </div>
    @endif

    @yield('content')
</main>

</body>
</html>