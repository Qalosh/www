@extends('layouts.admin')
@section('content')
<div>
    <h1 class="company-title">Заявки від клієнтів</h1>

    @if(session('success'))
        <div class="admin-alert">✅ {{ session('success') }}</div>
    @endif

    @if($requests->isEmpty())
        <p style="color:#888; margin-top:10px;">Заявок ще немає...</p>
    @else
        <table class="price-table" style="margin-top:20px;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ім'я</th>
                    <th>Телефон</th>
                    <th>Email</th>
                    <th>Повідомлення</th>
                    <th>Статус</th>
                    <th>Дата</th>
                </tr>
            </thead>
            <tbody>
                @foreach($requests as $req)
                <tr>
                    <td>{{ $req->id }}</td>
                    <td>{{ $req->name }}</td>
                    <td>{{ $req->phone }}</td>
                    <td>{{ $req->email ?? '—' }}</td>
                    <td>{{ $req->message }}</td>
                    <td>
                        <form method="POST" action="/admin/requests/{{ $req->id }}/status">
                            @csrf
                            <select name="status" onchange="this.form.submit()" class="status-select {{ $req->status }}">
                                <option value="new" {{ $req->status == 'new' ? 'selected' : '' }}>🆕 Нова</option>
                                <option value="in_progress" {{ $req->status == 'in_progress' ? 'selected' : '' }}>⏳ В роботі</option>
                                <option value="done" {{ $req->status == 'done' ? 'selected' : '' }}>✅ Виконано</option>
                            </select>
                        </form>
                    </td>
                    <td>{{ $req->created_at->format('d.m.Y H:i') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection