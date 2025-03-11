@extends('layout')

@section('title')О нас@endsection


@section('main_content')
    <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styleAbout.css') }}"> <!-- Подключение стилей -->
</head>
<body>

<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Левая часть с фото -->
            <div class="col-md-4 text-center">
                <img src="images/О нас.jpg" alt="Основатель" class="founder-img">
                <p class="founder-text">Основатель и руководитель Александра Ильчук. Тот самый человек, который сделает твой отдых незабываемым!</p>
            </div>
            <!-- Правая часть с текстом -->
            <div class="col-md-8">
                <h1 class="about-title">О проекте</h1>
                <p class="about-text">
                    Наш проект создан для тех, кто хочет путешествовать легко и без забот.
                    Мы предлагаем уникальные туры с продуманными маршрутами, комфортными условиями
                    и незабываемыми эмоциями. Саня и её команда лично подбирают каждое направление,
                    чтобы ты получил лучший опыт!
                </p>
            </div>
        </div>
    </div>
</section>

</body>
</html>



@endsection
