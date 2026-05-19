<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Управление достопримечательностями</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; }
        th { background: #f2f2f2; }
        .add-form { margin: 20px 0; padding: 15px; background: #f0f0f0; }
    </style>
</head>
<body>
    <h1>Управление достопримечательностями</h1>
    <p><a href="/admin">← Назад в админку</a></p>
    
    <div class="add-form">
        <h3>Добавить достопримечательность</h3>
        <form method="POST" action="/admin/landmarks">
            @csrf
            <select name="city_id" required>
                <option value="">Выберите город</option>
                @foreach($cities as $city)
                <option value="{{ $city->id }}">{{ $city->name }} ({{ $city->country->name ?? '' }})</option>
                @endforeach
            </select><br><br>
            <input type="text" name="name" placeholder="Название" required><br><br>
            <textarea name="description" placeholder="Описание" rows="5" cols="50" required></textarea><br><br>
            <button type="submit">Добавить</button>
        </form>
    </div>
    
    <h3>Список достопримечательностей</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Город</th>
            <th>Действия</th>
        </tr>
        @foreach($landmarks as $landmark)
        <tr>
            <td>{{ $landmark->id }}</td>
            <td>{{ $landmark->name }}</td>
            <td>{{ $landmark->city->name ?? '' }}</td>
            <td>
                <a href="/admin/landmarks/edit/{{ $landmark->id }}">✏️ Редактировать</a>
                <a href="/admin/landmarks/delete/{{ $landmark->id }}" onclick="return confirm('Удалить?')">🗑️ Удалить</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>