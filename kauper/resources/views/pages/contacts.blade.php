@extends('layouts.app')
@section('content')

<section class="services-hero">

    <div class="services-content">
        <h1 class="services-title">Контактна інформація</h1>

        <div class="contact-card">
            <div class="contact-card__label">АДРЕСА</div>
            <p class="contact-card__value bold">ТОВ «НємірофБуд»</p>
            <p class="contact-card__sub">вул. Соборна, 1, Немирів 01001, Україна</p>
        </div>

        <div class="contact-card">
            <div class="contact-card__label">ТЕЛЕФОНИ</div>
            <p class="contact-card__value">
                <a href="tel:+380443777410">+380 (98) 887-34-10</a>
                <span class="contact-note">— багатоканальний</span>
            </p>
            <p class="contact-card__value">
                <a href="tel:+380672303415">+380 (98) 887-34-15</a>
                <span class="contact-note">— приймання замовлень</span>
            </p>
        </div>

        <div class="contact-card">
            <div class="contact-card__label">ЕЛЕКТРОННА ПОШТА</div>
            <p class="contact-card__value"><a href="mailto:info@ctrlc.ua">info@ctrlc.ua</a> <span class="contact-note">— приймання замовлень</span></p>
            <p class="contact-card__value"><a href="mailto:buhgalter@ctrlc.ua">buhgalter@ctrlc.ua</a> <span class="contact-note">— бухгалтерія</span></p>
            <p class="contact-card__value"><a href="mailto:contractor@ctrlc.ua">contractor@ctrlc.ua</a> <span class="contact-note">— для підрядників</span></p>
            <p class="contact-card__value"><a href="mailto:supplier@ctrlc.ua">supplier@ctrlc.ua</a> <span class="contact-note">— для постачальників</span></p>
        </div>

        <div class="contact-card">
            <div class="contact-card__label">ГРАФІК РОБОТИ</div>
            <p class="contact-card__value">Пн — Пт: <span class="contact-highlight">9:00 — 18:00</span></p>
            <p class="contact-card__value">Сб — Нд: <span class="contact-note">вихідний</span></p>
        </div>
    </div>

    <div class="services-sidebar">
        <div class="services-sidebar__title">КОНТАКТИ</div>
        <ul class="services-sidebar__menu">
            <li><a href="/contacts" class="active">Контакти</a></li>
        </ul>
    </div>

</section>

<script>
function openPopup() {
    document.getElementById('popup').classList.add('active');
    document.body.style.overflow = 'hidden';
}
function closePopup(e) {
    if (!e || e.target === document.getElementById('popup')) {
        document.getElementById('popup').classList.remove('active');
        document.body.style.overflow = '';
    }
}
@if(session('contact_success')) openPopup(); @endif
</script>

@endsection