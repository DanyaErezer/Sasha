@extends('layout')

@section('title')
    Фотографии@endsection


    @section('main_content')
        <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/stylePhoto.css') }}">
    </head>
    <body>
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/photo/Foto19.jpg') }}"
                     class="img-fluid rounded gallery-img" alt="Фото 19">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/photo/Foto2.jpg') }}"
                     class="img-fluid rounded gallery-img" alt="Фото 1">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('images/photo/Foto2.jpg') }}"
                     class="img-fluid rounded gallery-img" alt="Фото 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/photo/Foto3.jpg') }}"
                     class="img-fluid rounded gallery-img" alt="Фото 3">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('images/photo/Foto4.jpg') }}"
                     class="img-fluid rounded gallery-img" alt="Фото 4">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/photo/Foto5.jpg') }}"
                     class="img-fluid rounded gallery-img" alt="Фото 5">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/photo/Foto6.jpg') }}"
                     class="img-fluid rounded gallery-img" alt="Фото 6">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/photo/Foto7.jpg') }}"
                     class="img-fluid rounded gallery-img" alt="Фото 7">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/photo/Foto8.jpg') }}"
                     class="img-fluid rounded gallery-img" alt="Фото 8">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/photo/Foto9.jpg') }}"
                     class="img-fluid rounded gallery-img" alt="Фото 9">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/photo/Foto10.jpg') }}"
                     class="img-fluid rounded gallery-img" alt="Фото 10">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/photo/Foto11.jpg') }}"
                     class="img-fluid rounded gallery-img" alt="Фото 11">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/photo/Foto12.jpg') }}"
                     class="img-fluid rounded gallery-img" alt="Фото 12">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/photo/Foto13.jpg') }}"
                     class="img-fluid rounded gallery-img" alt="Фото 13">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/photo/Foto14.jpg') }}"
                     class="img-fluid rounded gallery-img" alt="Фото 14">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/photo/Foto15.jpg') }}"
                     class="img-fluid rounded gallery-img" alt="Фото 15">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/photo/Foto17.jpg') }}"
                     class="img-fluid rounded gallery-img" alt="Фото 17">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/photo/Foto18.jpg') }}"
                     class="img-fluid rounded gallery-img" alt="Фото 18">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>

@endsection
