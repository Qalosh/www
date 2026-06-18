@extends('layouts.app')
@section('content')
<section class="company-page">
    <div class="company-layout">
        <div class="company-content">
            <h1 class="company-title">Планування робіт</h1>
            <p class="company-text">Створюйте детальні плани будівельних робіт з розбивкою по етапах, виконавцях та термінах. Система автоматично розраховує завантаженість бригад та попереджає про конфлікти в розкладі.</p>
            <p class="company-text">Функції: календарне планування, розподіл завдань, контроль виконання, сповіщення виконавцям, перегляд завантаженості команди.</p>
        </div>
        <aside class="company-sidebar">
            <div class="sidebar-title">ПОСЛУГИ</div>
            <ul class="sidebar-menu">
                <li><a href="/services/projects">Управління проектами</a></li>
                <li><a href="/services/resources">Управління ресурсами</a></li>
                <li><a href="/services/finance">Фінансовий облік</a></li>
                <li><a href="/services/planning" class="active">Планування робіт</a></li>
                <li><a href="/services/reports">Звітність та аналітика</a></li>
                <li><a href="/services/team">Управління командою</a></li>
                <li><a href="/services/quality">Контроль якості</a></li>
                <li><a href="/services/documents">Документообіг</a></li>
            </ul>
        </aside>
    </div>
</section>
@endsection