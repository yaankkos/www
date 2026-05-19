<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Города {{ $country->name }}</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .city { margin: 10px 0; padding: 8px; background: #e8e8e8; }
        .city a { font-size: 16px; text-decoration: none; color: #333; }
        .city a:hover { color: green; }
        .back { margin: 20px 0; }
    </style>
</head>
<body>
    <div class="back">
        <a href="/">← Назад к странам</a>
    </div>
    
    <h1>Города {{ $country->name }}</h1>
    
    @foreach($country->cities as $city)
        <div class="city">
            <a href="/landmarks/{{ $city->id }}">{{ $city->name }}</a>
        </div>
    @endforeach
</body>
</html>