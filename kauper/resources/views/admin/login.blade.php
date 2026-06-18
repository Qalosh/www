<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTRL+C — Вхід в адмін панель</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>

<div class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <span class="logo-text">CTRL+C</span>
            <span class="logo-sub">ADMIN PANEL</span>
        </div>

        <h2 class="login-title">Вхід в систему</h2>

        @if($errors->any())
            <div class="login-error">
                {{ $errors->first('login') }}
            </div>
        @endif

        <form method="POST" action="/admin/login">
            @csrf
            <div class="form-group">
                <label>Логін</label>
                <input type="text" name="login" value="{{ old('login') }}" placeholder="Введіть логін">
            </div>
            <div class="form-group">
                <label>Пароль</label>
                <input type="password" name="password" placeholder="Введіть пароль">
            </div>
            <button type="submit" class="btn-news" style="width:100%; text-align:center;">Увійти</button>
        </form>
    </div>
</div>

</body>
</html>