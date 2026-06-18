@extends('layouts.app')
@section('content')
<section class="company-page">
    <div class="company-layout">
        <div class="company-content">
            <h1 class="company-title">Контроль якості</h1>
            <p class="company-text">Фіксуйте результати перевірок на кожному етапі будівництва. Система зберігає фото, акти прийому робіт та дозволяє відстежувати усунення зауважень в режимі реального часу.</p>
            <p class="company-text">Функції: чеклісти перевірок, фотозвіти з об'єктів, акти виконаних робіт, контроль усунення зауважень, журнали будівельного нагляду.</p>
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
                <li><a href="/services/quality" class="active">Контроль якості</a></li>
                <li><a href="/services/documents">Документообіг</a></li>
            </ul>
        </aside>
    </div>
</section>
@endsection