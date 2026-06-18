<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ctrl+C</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<header class="header">
    <a href="/" class="header__logo">
        <span class="logo-text">НємірофБуд</span>
        <span class="logo-sub">CONSTRUCTION COMPANY</span>
    </a>
    <nav class="header__nav">
        <a href="/company" class="{{ request()->is('company*') ? 'active' : '' }}">КОМПАНІЯ</a>

        <div class="nav-dropdown">
            <a href="/services" class="{{ request()->is('services*') ? 'active' : '' }}">ПОСЛУГИ</a>
            <div class="nav-dropdown__menu">
                <a href="/services/projects">Управління проектами</a>
                <a href="/services/resources">Управління ресурсами</a>
                <a href="/services/finance">Фінансовий облік</a>
                <a href="/services/planning">Планування робіт</a>
                <a href="/services/reports">Звітність та аналітика</a>
                <a href="/services/team">Управління командою</a>
                <a href="/services/quality">Контроль якості</a>
                <a href="/services/documents">Документообіг</a>
            </div>
        </div>

        <a href="/projects" class="{{ request()->is('projects*') ? 'active' : '' }}">ПРОЕКТИ</a>
        <a href="/prices" class="{{ request()->is('prices*') ? 'active' : '' }}">ПРАЙС</a>
        <a href="/documents" class="{{ request()->is('documents*') ? 'active' : '' }}">ДОКУМЕНТИ</a>
        <a href="/contacts" class="{{ request()->is('contacts*') ? 'active' : '' }}">КОНТАКТИ</a>
    </nav>
</header>

@yield('content')
</body>
</html>