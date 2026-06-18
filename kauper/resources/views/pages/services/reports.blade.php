@extends('layouts.app')
@section('content')
<section class="company-page">
    <div class="company-layout">
        <div class="company-content">
            <h1 class="company-title">Звітність та аналітика</h1>
            <p class="company-text">Детальні звіти по кожному проекту, відділу та співробітнику. Аналізуйте ефективність роботи компанії, виявляйте проблемні місця та приймайте рішення на основі реальних даних.</p>
            <p class="company-text">Функції: автоматичні звіти, графіки та діаграми, експорт в Excel/PDF, порівняння план/факт, KPI співробітників.</p>
        </div>
        <aside class="company-sidebar">
            <div class="sidebar-title">ПОСЛУГИ</div>
            <ul class="sidebar-menu">
                <li><a href="/services/projects">Управління проектами</a></li>
                <li><a href="/services/resources">Управління ресурсами</a></li>
                <li><a href="/services/finance">Фінансовий облік</a></li>
                <li><a href="/services/planning">Планування робіт</a></li>
                <li><a href="/services/reports" class="active">Звітність та аналітика</a></li>
                <li><a href="/services/team">Управління командою</a></li>
                <li><a href="/services/quality">Контроль якості</a></li>
                <li><a href="/services/documents">Документообіг</a></li>
            </ul>
        </aside>
    </div>
</section>
@endsection