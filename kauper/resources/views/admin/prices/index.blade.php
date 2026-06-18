@extends('layouts.app')
@section('content')
<section class="company-page">
    <div class="company-layout">
        <div class="company-content">
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;">
                <h1 class="company-title">Управління цінами</h1>
                <a href="/admin/prices/create" class="btn-news">+ Додати ціну</a>
            </div>

            @if(session('success'))
                <div style="background:#F5C518; color:#1a2744; padding:10px 20px; margin-bottom:20px; font-weight:600;">
                    {{ session('success') }}
                </div>
            @endif

            <table class="price-table">
                <thead>
                    <tr>
                        <th>Категорія</th>
                        <th>Назва</th>
                        <th>Од. вим.</th>
                        <th>Ціна</th>
                        <th>Дії</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($prices as $price)
                    <tr>
                        <td>{{ $price->category }}</td>
                        <td>{{ $price->name }}</td>
                        <td>{{ $price->unit }}</td>
                        <td>від {{ $price->price }} ₴</td>
                        <td>
                            <a href="/admin/prices/{{ $price->id }}/edit" class="btn-edit">Редагувати</a>
                            <form action="/admin/prices/{{ $price->id }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete" onclick="return confirm('Видалити?')">Видалити</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection