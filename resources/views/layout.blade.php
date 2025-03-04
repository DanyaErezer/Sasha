<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/styleHeader.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>





<header class="header">
    <div class="container">
        <h1><a href="/" class="site-title">TrvlIlch</a></h1>
        <nav class="nav-menu">
            <ul>
                <li><a href="{{ route('home') }}" class="{{ Route::is('home') ? 'active' : '' }}">Главная</a></li>
                <li><a href="{{ route('travel') }}" class="{{ Route::is('travel') ? 'active' : '' }}">Путешествия</a></li>
                <li><a href="{{ route('photo') }}" class="{{ Route::is('photo') ? 'active' : '' }}">Фотографии</a></li>
                <li><a href="{{ route('about') }}" class="{{ Route::is('about') ? 'active' : '' }}">О нас</a></li>
            </ul>
        </nav>
        <div class="social-icons">
            <a href="https://t.me/+dGf_uOoEqDMzNTIy" target="_blank">
                <img src="/images/телеграм.svg" alt="Telegram">
            </a>
            <a href="https://vk.com/club229293452" target="_blank">
                <img src="/images/vk.svg" alt="VK">
            </a>
            <a href="https://www.instagram.com/username" target="_blank">
                <img src="/images/instagram.svg" alt="Instagram">
            </a>
        </div>
    </div>
</header>



@yield('main_content')


@include('footer')
</body>
</html>
