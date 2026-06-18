@extends('layouts.app')

@section('content')
<section class="company-page">
    <div class="company-layout">
        <div class="company-content">
            <h1 class="company-title">Новини</h1>
            <p class="company-text">Новини компанії будуть тут.</p>
        </div>
        <aside class="company-sidebar">
            <div class="sidebar-title">КОМПАНІЯ</div>
            <ul class="sidebar-menu">
                <li><a href="/company">Про компанію</a></li>
                <li><a href="/company/news" class="active">Новини</a></li>
                <li><a href="/company/clients">Наші клієнти</a></li>
                <li><a href="/company/reviews">Відгуки</a></li>
            </ul>
        </aside>
    </div>
</section>
@endsection