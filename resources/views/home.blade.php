@extends('layout')

@section('title')Главная страница@endsection


@section('main_content')
    <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Путешествия из Воронежа</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Подключение собственного стиля -->
</head>
<body>
<!-- Главная секция с изображением и текстом -->
<section class="hero-section" style="background-image">
    <div class="container text-center text-white py-5">
        <h1 class="hero-title display-3">Если ты не чмо</h1>
        <p class="hero-subtitle lead">Быстро взял тур у Сани</p>
        <p class="hero-description">Или тебя посадят на бутылку!</p>
        <a href="/contact" class="btn btn-primary hero-btn">ХОЧУ С ВАМИ</a>
    </div>
</section>

<!-- Блок с турами -->
<section id="tours" class="tours-section py-5">
    <div class="container text-center text-white">
        <h2 class="section-title display-4">СМОТРЕТЬ ТУРЫ</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="tour-card">
                    <img src="images/Дагестан.jpg" alt="Май" class="img-fluid rounded">
                    <h3>Тур на хуй</h3>
                    <p>Необычные маршруты, интересные места.</p>
                    <a href="#" class="btn btn-secondary">Подробнее</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="tour-card">
                    <img src="tour2.jpg" alt="Июнь" class="img-fluid rounded">
                    <h3>Тур в Жопу</h3>
                    <p>Морские побережья и живописные виды.</p>
                    <a href="#" class="btn btn-secondary">Подробнее</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="tour-card">
                    <img src="tour3.jpg" alt="Июль" class="img-fluid rounded">
                    <h3>Тур в Гейропу</h3>
                    <p>Европейские города и культура.</p>
                    <a href="#" class="btn btn-secondary">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Блок с бронированием отелей -->
<section id="hotels" class="hotels-section py-5">
    <div class="container text-center text-white">
        <h2 class="section-title display-4">Свяжись со мной</h2>
        <p class="section-subtitle lead">Я помогу организовать отдых твоей мечты</p>
        <a href="/about" class="btn btn-primary">Связь!!</a>
    </div>
</section>


</body>
</html>



</body>
</html>


@endsection
