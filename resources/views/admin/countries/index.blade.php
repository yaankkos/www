<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Управление странами</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background: #f2f2f2; }
        .add-form { margin: 20px 0; padding: 15px; background: #f0f0f0; }
        input[type="text"] { padding: 5px; width: 200px; }
        button { padding: 5px 10px; background: green; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Управление странами</h1>
    <p><a href="/admin">← Назад в админку</a></p>
    
    <div class="add-form">
        <h3>Добавить страну</h3>
        <form method="POST" action="/admin/countries">
            @csrf
            <input type="text" name="name" placeholder="Название страны" required>
            <button type="submit">Добавить</button>
        </form>
    </div>
    
    <h3>Список стран</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Действия</th>
        </tr>
        @foreach($countries as $country)
        <tr>
            <td>{{ $country->id }}</td>
            <td>{{ $country->name }}</td>
            <td>
                <a href="/admin/countries/edit/{{ $country->id }}">✏️ Редактировать</a>
                <a href="/admin/countries/delete/{{ $country->id }}" onclick="return confirm('Удалить страну?')">🗑️ Удалить</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>