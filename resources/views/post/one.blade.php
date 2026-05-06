html<!DOCTYPE html>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>{{ $post->title }}</title>
</head>
<body>
    <h1>{{ $post->title }}</h1>
    <p><strong>ID:</strong> {{ $post->id }}</p>
    <p><strong>Описание:</strong> {{ $post->desc }}</p>
    <p><a href="{{ route('posts.index') }}">← Назад к списку статей</a></p>
</body>
</html>