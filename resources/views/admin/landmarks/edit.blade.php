<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Редактирование достопримечательности</title>
</head>
<body>
    <h1>Редактирование достопримечательности</h1>
    
    <form method="POST" action="/admin/landmarks/update/{{ $landmark->id }}">
        @csrf
        <select name="city_id" required>
            @foreach($cities as $city)
            <option value="{{ $city->id }}" {{ $landmark->city_id == $city->id ? 'selected' : '' }}>
                {{ $city->name }}
            </option>
            @endforeach
        </select><br><br>
        <input type="text" name="name" value="{{ $landmark->name }}" required><br><br>
        <textarea name="description" rows="5" cols="50" required>{{ $landmark->description }}</textarea><br><br>
        <button type="submit">Сохранить</button>
        <a href="/admin/landmarks">Отмена</a>
    </form>
</body>
</html>