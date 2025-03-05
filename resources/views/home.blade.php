@extends('layout')

@section('title')Главная страница@endsection

@section('main_content')
    <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Путешествия из Воронежа</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styleHome.css') }}">
</head>
<body>

<!-- Главная секция -->
<section class="hero-section">
    <div class="container text-center hero-content">
        <h1 class="hero-title">Твой лучший отпуск в горах Дагестана</h1>
        <h2 class="hero-subtitle">Спланируй поездку с опытными гидами</h2>
        <h3 class="hero-description">Здесь каждый поворот — это новая история!</h3>
        <a href="/travel" class="btn btn-dark hero-btn">ХОЧУ С ВАМИ</a>
    </div>
</section>

<!-- Блок с турами -->
<section id="tours" class="tours-section">
    <div class="container text-center">
        <div class="row">
            @foreach(['home1', 'home2', 'home3'] as $category)
                <div class="col-md-4">
                    <div class="tour-card">
                        @if(isset($cards[$category]) && count($cards[$category]) > 0)
                            @foreach($cards[$category] as $post)
                                <h2>{{ $post->post_title }}</h2>
                                <p>{!! $post->post_content !!}</p>
                            @endforeach
                        @else
                            <p>Нет записей</p>
                        @endif
                        <a href="/travel" class="btn btn-outline-dark">Подробнее</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Форма заказа звонка -->
<section class="contact-section">
    <div class="container">
        <div class="form-container">
            <form action="{{ route('call') }}" method="POST">
                @csrf
                <h2 class="text-center">Закажи звонок!</h2>
                <div class="form-group">
                    <label for="name">Имя:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="phone">Номер телефона:</label>
                    <input type="tel" id="phone" name="phone" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Заказать звонок</button>
                @if(session('success'))
                    <div class="alert alert-success mt-3">{{ session('success') }}</div>
                @endif
            </form>
        </div>
    </div>
</section>

</body>
</html>
@endsection
