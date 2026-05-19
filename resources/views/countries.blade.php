<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Страны мира</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .country { margin: 15px 0; padding: 10px; background: #f0f0f0; }
        .country a { font-size: 18px; text-decoration: none; color: #333; }
        .country a:hover { color: blue; }
    </style>
</head>
<body>
    <h1>Страны мира</h1>
    
    @foreach($countries as $country)
        <div class="country">
            <a href="/cities/{{ $country->id }}">{{ $country->name }}</a>
        </div>
    @endforeach
    
    <hr>
    <p><a href="/admin">Вход в админку</a></p>
</body>
</html>