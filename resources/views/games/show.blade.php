<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>{{$game->title}}</title>
</head>
<body>
    <h1>{{$game->title}}</h1>
    <p><strong>Жанр:</strong> {{$game->genre}}</p>
    <hr>
    <p>{{$game->description}}</p>

    <br>
    <a href="{{route('games.index')}}">Вернуться к списку игр</a>
</body>
</html>
