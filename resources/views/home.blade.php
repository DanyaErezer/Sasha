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
    <link rel="stylesheet" href="{{ asset('css/styleHome.css') }}"> <!-- Подключение CSS -->
</head>
<body>

<!-- Главная секция -->
<section class="hero-section">
    <div class="container text-center hero-content">
        <h1 class="hero-title">Если ты хочешь</h1>
        <h2 class="hero-subtitle">Быстро взял тур у Сани</h2>
        <h3 class="hero-description">Или тебя посадят на бутылку!</h3>
        <a href="/travel" class="btn btn-dark hero-btn">ХОЧУ С ВАМИ</a>
    </div>
</section>

<!-- Блок с турами -->
<section id="tours" class="tours-section">
    <div class="container text-center">
        <h2 class="section-title">НАШИ ТУРЫ</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="tour-card">
                    <img src="images/Дагестан.jpg" alt="Май">
                    <h3></h3>
                    <p>Необычные маршруты, интересные места.</p>
                    <a href="/travel" class="btn btn-outline-dark">Подробнее</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="tour-card">
                    <img src="images/Фон 2.jpg" alt="Июнь">
                    <h3>Тур в Жопу</h3>
                    <p>Морские побережья и живописные виды.</p>
                    <a href="/travel" class="btn btn-outline-dark">Подробнее</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="tour-card">
                    <img src="images/Фон 1.jpg" alt="Июль">
                    <h3>Тур в Гейропу</h3>
                    <p>Европейские города и культура.</p>
                    <a href="/travel" class="btn btn-outline-dark">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="hotels" class="hotels-section">
    <div class="container text-center">
        <h2 class="section-title">Свяжись со мной</h2>
        <p class="section-subtitle">Я помогу организовать отдых твоей мечты</p>
        <a href="/contact" class="btn btn-dark">Связь!!</a>
    </div>
</section>

</body>
</html>







@endsection
