<!DOCTYPE html>
<html>
<head>
    <title>Список пользователей</title>
</head>
<body>
    <h1>Статьи</h1>

@foreach($posts as $post)
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->descc }}</p>
    <p>{{ $post->text }}</p>
    <hr>
@endforeach
</body>
</html>