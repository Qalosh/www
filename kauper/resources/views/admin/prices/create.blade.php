@extends('layouts.app')
@section('content')
<section class="company-page">
    <div class="company-layout">
        <div class="company-content">
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;">
                <h1 class="company-title">Додати ціну</h1>
                <a href="/admin/prices" class="btn-news">← Назад</a>
            </div>

            @if($errors->any())
                <div style="background:#c0392b; padding:10px 20px; margin-bottom:20px;">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="/admin/prices">
                @csrf
                <div class="admin-form">
                    <div class="form-group">
                        <label>Категорія</label>
                        <input type="text" name="category" value="{{ old('category') }}" placeholder="Наприклад: Фундаменти">
                    </div>
                    <div class="form-group">
                        <label>Назва роботи</label>
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Наприклад: Виямка грунту вручну">
                    </div>
                    <div class="form-group">
                        <label>Одиниця виміру</label>
                        <input type="text" name="unit" value="{{ old('unit') }}" placeholder="м2, м3, кг...">
                    </div>
                    <div class="form-group">
                        <label>Ціна (₴)</label>
                        <input type="number" name="price" value="{{ old('price') }}" placeholder="420">
                    </div>
                    <button type="submit" class="btn-news">Зберегти</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection