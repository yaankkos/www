<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Редактирование страны</title>
</head>
<body>
    <h1>Редактирование страны</h1>
    
    <form method="POST" action="/admin/countries/update/{{ $country->id }}">
        @csrf
        <input type="text" name="name" value="{{ $country->name }}" required>
        <button type="submit">Сохранить</button>
        <a href="/admin/countries">Отмена</a>
    </form>
</body>
</html>