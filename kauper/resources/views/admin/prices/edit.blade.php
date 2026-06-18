@extends('layouts.app')
@section('content')
<section class="company-page">
    <div class="company-layout">
        <div class="company-content">
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;">
                <h1 class="company-title">Редагувати ціну</h1>
                <a href="/admin/prices" class="btn-news">← Назад</a>
            </div>

            @if($errors->any())
                <div style="background:#c0392b; padding:10px 20px; margin-bottom:20px;">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="/admin/prices/{{ $price->id }}">
                @csrf
                @method('PUT')
                <div class="admin-form">
                    <div class="form-group">
                        <label>Категорія</label>
                        <input type="text" name="category" value="{{ $price->category }}">
                    </div>
                    <div class="form-group">
                        <label>Назва роботи</label>
                        <input type="text" name="name" value="{{ $price->name }}">
                    </div>
                    <div class="form-group">
                        <label>Одиниця виміру</label>
                        <input type="text" name="unit" value="{{ $price->unit }}">
                    </div>
                    <div class="form-group">
                        <label>Ціна (₴)</label>
                        <input type="number" name="price" value="{{ $price->price }}">
                    </div>
                    <button type="submit" class="btn-news">Оновити</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection