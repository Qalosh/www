@extends('layouts.app')
@section('content')
<section class="company-page">
    <div class="company-layout">
        <div class="company-content">
            <h1 class="company-title">Управління ресурсами</h1>
            <p class="company-text">Контролюйте використання матеріалів, техніки та обладнання на всіх об'єктах. Система автоматично відстежує залишки на складах, формує замовлення постачальникам та попереджає про нестачу ресурсів.</p>
            <p class="company-text">Функції: облік матеріалів, управління складом, контроль техніки, замовлення постачальникам, аналіз витрат ресурсів.</p>
        </div>
        <aside class="company-sidebar">
            <div class="sidebar-title">ПОСЛУГИ</div>
            <ul class="sidebar-menu">
                <li><a href="/services/projects">Управління проектами</a></li>
                <li><a href="/services/resources" class="active">Управління ресурсами</a></li>
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