@extends('layouts.app')
@section('content')
<section class="company-page">
    <div class="company-layout">
        <div class="company-content">
            <h1 class="company-title">Реквізити</h1>

            <div class="requisites">
                <p><strong>ТОВ «НємірофБуд»</strong></p>
                <p>вул. Соборна, 1, м. Немирів 01001, Україна</p>
                <p>ЄДРПОУ 05032197</p>
                <p>р/р UA033214560855510070000065597</p>
                <p>в АТ «ХайтауерБанк»</p>
                <p>МФО 321456</p>
                <p>ІПН 123456789012</p>
                <p>Свідоцтво платника ПДВ № 100123456</p>
            </div>

            <a href="{{ asset('files/NemirofB-contract.pdf') }}" class="doc-download" target="_blank">
                <span>Скачати типовий договір</span>
            </a>
        </div>

        <aside class="company-sidebar">
            <div class="sidebar-title">ДОКУМЕНТИ</div>
            <ul class="sidebar-menu">
                <li><a href="/documents" class="active">Реквізити та типовий договір</a></li>
                <li><a href="/documents/license">Ліцензія на ПЗ</a></li>
                <li><a href="/documents/certificate">Сертифікат відповідності</a></li>
                <li><a href="/documents/privacy">Політика конфіденційності</a></li>
            </ul>
        </aside>
    </div>
</section>
@endsection