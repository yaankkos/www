<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Редактирование города</title>
</head>
<body>
    <h1>Редактирование города</h1>
    
    <form method="POST" action="/admin/cities/update/{{ $city->id }}">
        @csrf
        <select name="country_id" required>
            @foreach($countries as $country)
            <option value="{{ $country->id }}" {{ $city->country_id == $country->id ? 'selected' : '' }}>
                {{ $country->name }}
            </option>
            @endforeach
        </select>
        <input type="text" name="name" value="{{ $city->name }}" required>
        <button type="submit">Сохранить</button>
        <a href="/admin/cities">Отмена</a>
    </form>
</body>
</html>