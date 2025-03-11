<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Экскурсия</title>
    <link rel="stylesheet" href="{{ asset ('css/styleInfo.css') }}">
</head>
<body>

<div class="container">
    <div class="image">
        <img src="../images/info/Горы 4.jpg" alt="Экскурсия">
    </div>
    <div class="text">
        @foreach($posts as $post)
            <div class="post">
                <h2>{{ $post->post_title }}</h2>
                <p>{!! ($post->post_content) !!}</p>
            </div>
        @endforeach
            <a href="https://t.me/ilch_sas" target="_blank" rel="noopener noreferrer" class="btn">Забронировать</a>
    </div>
</div>

</body>
</html>
