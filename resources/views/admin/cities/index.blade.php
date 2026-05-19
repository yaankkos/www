<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Управление городами</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; }
        th { background: #f2f2f2; }
        .add-form { margin: 20px 0; padding: 15px; background: #f0f0f0; }
        select, input { padding: 5px; margin: 5px; }
    </style>
</head>
<body>
    <h1>Управление городами</h1>
    <p><a href="/admin">← Назад в админку</a></p>
    
    <div class="add-form">
        <h3>Добавить город</h3>
        <form method="POST" action="/admin/cities">
            @csrf
            <select name="country_id" required>
                <option value="">Выберите страну</option>
                @foreach($countries as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
            <input type="text" name="name" placeholder="Название города" required>
            <button type="submit">Добавить</button>
        </form>
    </div>
    
    <h3>Список городов</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Город</th>
            <th>Страна</th>
            <th>Действия</th>
        </tr>
        @foreach($cities as $city)
        <tr>
            <td>{{ $city->id }}</td>
            <td>{{ $city->name }}</td>
            <td>{{ $city->country->name ?? '' }}</td>
            <td>
                <a href="/admin/cities/edit/{{ $city->id }}">✏️ Редактировать</a>
                <a href="/admin/cities/delete/{{ $city->id }}" onclick="return confirm('Удалить город?')">🗑️ Удалить</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>