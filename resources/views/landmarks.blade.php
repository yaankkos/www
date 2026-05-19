<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Достопримечательности {{ $city->name }}</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .landmark { margin: 10px 0; padding: 8px; background: #e8e8e8; }
        .landmark a { font-size: 16px; text-decoration: none; color: #333; }
        .landmark a:hover { color: red; }
        .back { margin: 20px 0; }
    </style>
</head>
<body>
    <div class="back">
        <a href="/cities/{{ $city->country_id }}">← Назад к городам</a>
    </div>
    
    <h1>Достопримечательности {{ $city->name }}</h1>
    
    @foreach($city->landmarks as $landmark)
        <div class="landmark">
            <a href="/landmark/{{ $landmark->id }}">{{ $landmark->name }}</a>
        </div>
    @endforeach
</body>
</html>