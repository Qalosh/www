@extends('layouts.app')
@section('content')
<section class="company-page">
    <div class="company-layout">
        <div class="company-content">
            <h1 class="company-title">Документообіг</h1>
            <p class="company-text">Зберігайте всю проектну документацію в одному місці — договори, кошториси, креслення, дозволи, акти. Швидкий пошук, версіонування та контроль доступу до документів.</p>
            <p class="company-text">Функції: електронний архів, версіонування документів, розмежування доступу, підписання актів, інтеграція з держреєстрами.</p>
        </div>
        <aside class="company-sidebar">
            <div class="sidebar-title">ПОСЛУГИ</div>
            <ul class="sidebar-menu">
                <li><a href="/services/projects">Управління проектами</a></li>
                <li><a href="/services/resources">Управління ресурсами</a></li>
                <li><a href="/services/finance">Фінансовий облік</a></li>
                <li><a href="/services/planning">Планування робіт</a></li>
                <li><a href="/services/reports">Звітність та аналітика</a></li>
                <li><a href="/services/team">Управління командою</a></li>
                <li><a href="/services/quality">Контроль якості</a></li>
                <li><a href="/services/documents" class="active">Документообіг</a></li>
            </ul>
        </aside>
    </div>
</section>
@endsection