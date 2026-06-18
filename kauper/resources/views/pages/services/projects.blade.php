@extends('layouts.app')
@section('content')
<section class="company-page">
    <div class="company-layout">
        <div class="company-content">
            <h1 class="company-title">Управління проектами</h1>
            <p class="company-text">Система CTRL+C дозволяє повністю контролювати будівельні проекти — від планування до здачі об'єкта. Відстежуйте терміни, етапи виконання, відповідальних виконавців та бюджет в режимі реального часу.</p>
            <p class="company-text">Функції: створення проектів, призначення команди, контроль дедлайнів, Gantt-діаграми, сповіщення про відхилення від плану.</p>
        </div>
        <aside class="company-sidebar">
            <div class="sidebar-title">ПОСЛУГИ</div>
            <ul class="sidebar-menu">
                <li><a href="/services/projects" class="active">Управління проектами</a></li>
                <li><a href="/services/resources">Управління ресурсами</a></li>
                <li><a href="/services/finance">Фінансовий облік</a></li>
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