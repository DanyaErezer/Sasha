@extends('layout')

@section('title')Контакты@endsection


@section('main_content')
    <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styleContacts.css') }}">
</head>
<body>
<section class="contact-section">
    <div class="container text-center">
        <h1 class="contact-title">Свяжитесь с нами</h1>
        <h4 class="contact-subtitle">Мы всегда на связи!</h4>

        <div class="contact-info">
            <p><strong>Телефон:</strong> <a href="tel:+79805621567">+7-980-562-1567</a></p>
            <p><strong>Email:</strong> <a href="mailto:lady.ilchuk@gmail.com">lady.ilchuk@gmail.com</a></p>
        </div>

        <div class="spacer"></div>

        <!-- Фото по центру -->
        <div class="contact-image">
            <img src="{{ asset('images/contact.webp') }}" alt="GIF">
        </div>
    </div>
</section>
</body>
</html>



@endsection
