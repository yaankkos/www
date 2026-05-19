<!DOCTYPE html>
<html>
<head>
    <title>Рубрики объявлений</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        .rubric { margin: 10px 0; padding: 10px; background: #f0f0f0; }
    </style>
</head>
<body>
    <h1>Рубрики объявлений</h1>
    
    @foreach($categories as $cat)
        <div class="rubric">
            <a href="/ads/cat/{{ $cat->id }}">{{ $cat->name }}</a>
        </div>
    @endforeach
    
    <p><a href="/guestbook">Гостевая книга</a> | <a href="/">Города и страны</a></p>
</body>
</html>
