@extends('layouts.app')

@section('content')

<section class="hero">
    <div class="hero__overlay"></div>

    <section class="services-bar">
        <div class="services-bar__icons">
            <svg viewBox="0 0 60 60" fill="#1a2744" xmlns="http://www.w3.org/2000/svg">
                <rect x="5" y="35" width="40" height="8" rx="2"/>
                <rect x="10" y="25" width="25" height="12" rx="2"/>
                <circle cx="12" cy="45" r="5"/>
                <circle cx="35" cy="45" r="5"/>
                <rect x="40" y="30" width="12" height="5" rx="1"/>
            </svg>
            <svg viewBox="0 0 60 60" fill="#1a2744" xmlns="http://www.w3.org/2000/svg">
                <rect x="25" y="5" width="8" height="35" rx="2"/>
                <rect x="15" y="35" width="28" height="8" rx="2"/>
                <rect x="10" y="40" width="8" height="15" rx="2"/>
                <rect x="40" y="40" width="8" height="15" rx="2"/>
            </svg>
            <svg viewBox="0 0 60 60" fill="#1a2744" xmlns="http://www.w3.org/2000/svg">
                <rect x="5" y="10" width="6" height="45" rx="1"/>
                <rect x="47" y="10" width="6" height="45" rx="1"/>
                <rect x="5" y="10" width="48" height="6" rx="1"/>
                <rect x="15" y="16" width="4" height="20" rx="1"/>
                <rect x="25" y="16" width="4" height="20" rx="1"/>
                <rect x="35" y="16" width="4" height="20" rx="1"/>
            </svg>
            <svg viewBox="0 0 60 60" fill="#1a2744" xmlns="http://www.w3.org/2000/svg">
                <rect x="5" y="40" width="50" height="8" rx="2"/>
                <rect x="10" y="25" width="15" height="18" rx="2"/>
                <rect x="30" y="30" width="20" height="12" rx="2"/>
                <rect x="8" y="48" width="8" height="8" rx="1"/>
                <rect x="22" y="48" width="8" height="8" rx="1"/>
            </svg>
        </div>
        <div class="services-bar__text">
            <div class="services-bar__title">ТОВ"НємірофБуд" — АВТОМАТИЗОВАНА СИСТЕМА УПРАВЛІННЯ ДЛЯ БУДІВНИЦТВА</div>
            <div class="services-bar__desc">Управління проектами, ресурсами та фінансами для будівельних компаній в одній системі</div>
        </div>
    </section>

</section>
@endsection