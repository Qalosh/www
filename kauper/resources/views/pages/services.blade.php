@extends('layouts.app')
@section('content')

<section class="company-page">
    <div class="company-layout">
        <div class="company-content">
            <h1 class="company-title">Послуги</h1>
            <p class="company-text">Оберіть послугу з меню або залиште заявку — ми зв'яжемось з вами!</p>
            <button class="btn-news" onclick="openPopup()"> Залишити заявку</button>
        </div>
        <aside class="company-sidebar">
            <div class="sidebar-title">ПОСЛУГИ</div>
            <ul class="sidebar-menu">
                <li><a href="/services" class="active">Всі послуги</a></li>
                <li><a href="/services/projects">Управління проектами</a></li>
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

{{-- POPUP --}}
<div class="popup-overlay" id="popup" onclick="closePopup(event)">
    <div class="popup-box">
        <button class="popup-close" onclick="closePopup()">✕</button>
        <h2 class="popup-title">Залишити заявку</h2>

        @if(session('success'))
            <div class="popup-success">✅ {{ session('success') }}</div>
        @endif

        <form method="POST" action="/requests">
            @csrf
            <div class="form-group">
                <label>Ваше ім'я *</label>
                <input type="text" name="name" placeholder="Іван Іваненко" required>
            </div>
            <div class="form-group">
                <label>Телефон *</label>
                <input type="text" name="phone" placeholder="+380 XX XXX XX XX" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="email@example.com">
            </div>
            <div class="form-group">
                <label>Опис проекту *</label>
                <textarea name="message" placeholder="Опишіть ваш проект..." required></textarea>
            </div>
            <button type="submit" class="btn-news" style="width:100%; text-align:center;">Відправити заявку</button>
        </form>
    </div>
</div>

<script>
function openPopup() {
    document.getElementById('popup').classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closePopup(event) {
    if (!event || event.target === document.getElementById('popup')) {
        document.getElementById('popup').classList.remove('active');
        document.body.style.overflow = '';
    }
}

@if(session('success'))
    openPopup();
@endif
</script>

@endsection