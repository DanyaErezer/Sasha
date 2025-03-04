@extends('layout')

@section('title')Путешествие@endsection


@section('main_content')
    <!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styleTravel.css') }}"> <!-- Подключаем наш CSS файл -->
</head>
<body>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <div class="col">
        <div class="card shadow-sm">
            <img src="../images/travel/rock1.jpg" class="card-img-top" alt="Описание">
            <div class="card-body">
                @foreach([ 'travel1' ] as $category)
                @foreach($cards[$category] as $post)
                    <h2>{{ $post->post_title }}</h2>
                    <p>{!! $post->post_content !!}</p>
                @endforeach
                @endforeach
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="info/info1" target="_blank" rel="noopener noreferrer">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Подробнее</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card shadow-sm">
            <img src="../images/travel/rock2.jpg" class="card-img-top" alt="Описание">
            <div class="card-body">
                @foreach([ 'travel2' ] as $category)
                    @foreach($cards[$category] as $post)
                        <h2>{{ $post->post_title }}</h2>
                        <p>{!! $post->post_content !!}</p>
                    @endforeach
                @endforeach
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="info/info2" target="_blank" rel="noopener noreferrer">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Подробнее</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card shadow-sm">
            <img src="../images/travel/rock3.jpg" class="card-img-top" alt="Описание">
            <div class="card-body">
                @foreach([ 'travel3' ] as $category)
                    @foreach($cards[$category] as $post)
                        <h2>{{ $post->post_title }}</h2>
                        <p>{!! $post->post_content !!}</p>
                    @endforeach
                @endforeach
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="info/info3" target="_blank" rel="noopener noreferrer">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Подробнее</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card shadow-sm">
            <img src="../images/travel/rock4.jpg" class="card-img-top" alt="Описание">
            <div class="card-body">
                @foreach([ 'travel4' ] as $category)
                    @foreach($cards[$category] as $post)
                        <h2>{{ $post->post_title }}</h2>
                        <p>{!! $post->post_content !!}</p>
                    @endforeach
                @endforeach
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="info/info4" target="_blank" rel="noopener noreferrer">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Подробнее</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>



@endsection
