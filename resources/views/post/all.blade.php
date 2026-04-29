<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Список статей</title>
</head>
<body>
    <h1>Список статей</h1>
    
    @foreach($posts as $post)
        <p>
            {{ $post->id }}. 
            {{ $post->title }} - 
            {{ $post->descc ?? $post->descc ?? 'Нет описания' }}
        </p>
    @endforeach
</body>
</html>