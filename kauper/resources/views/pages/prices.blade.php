@extends('layouts.app')
@section('content')

<section class="prices-page">
    <h1 class="prices-title">Ціни на будівельні послуги</h1>
    <h2 class="prices-subtitle">Орієнтовний будівельний прайс на 2026 рік - Актуальність цін - уточнюйте!</h2>

    @foreach($prices->groupBy('category') as $category => $items)
    <div class="prices-block">
        <table class="prices-table">
            <thead>
                <tr>
                    <th>{{ $category }}:</th>
                    <th>Од. вим.</th>
                    <th></th>
                    <th>Ціна</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $price)
                <tr class="prices-row">
                    <td>{{ $price->name }}</td>
                    <td>{{ $price->unit }}</td>
                    <td>від</td>
                    <td>{{ number_format($price->price, 0, '.', ' ') }} ₴</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endforeach

</section>

@endsection