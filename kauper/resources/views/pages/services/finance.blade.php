@extends('layouts.app')
@section('content')
<section class="company-page">
    <div class="company-layout">
        <div class="company-content">
            <h1 class="company-title">Фінансовий облік</h1>
            <p class="company-text">Повний контроль фінансів будівельної компанії — кошториси, рахунки, платежі, прибутки та збитки по кожному проекту. Інтеграція з бухгалтерськими системами.</p>
            <p class="company-text">Функції: кошторисування, облік витрат, контроль оплат, фінансові звіти, прогнозування бюджету, аналіз рентабельності проектів.</p>
        </div>
        <aside class="company-sidebar">
            <div class="sidebar-title">ПОСЛУГИ</div>
            <ul class="sidebar-menu">
                <li><a href="/services/projects">Управління проектами</a></li>
                <li><a href="/services/resources">Управління ресурсами</a></li>
                <li><a href="/services/finance" class="active">Фінансовий облік</a></li>
                <li><a href="/services/planning">Планування робіт</a></li>
                <li><a href="/services/reports">Звітність та аналітика</a></li>
                <li><a href="/services/team">Управління командою</a></li>
                <li><a href="/services/quality">Контроль якості</a></li>
                <li><a href="/services/documents">Документообіг</a></li>
            </ul>
        </aside>
    </div>
</section>
@endsection