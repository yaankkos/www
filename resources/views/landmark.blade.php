<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>{{ $landmark->name }}</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .description { margin: 20px 0; padding: 15px; background: #f9f9f9; border-left: 4px solid #ccc; }
        .back { margin: 20px 0; }
    </style>
</head>
<body>
    <div class="back">
        <a href="/landmarks/{{ $landmark->city_id }}">← Назад к достопримечательностям</a>
    </div>
    
    <h1>{{ $landmark->name }}</h1>
    
    <div class="description">
        <p>{{ $landmark->description }}</p>
    </div>
</body>
</html>