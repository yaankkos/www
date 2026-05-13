<!DOCTYPE html>
<html lang="ru">
<head>
    <div>
        <h1>Пользователи и профили</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Имя</th>
        <th>Email</th>
        <th>Имя профиля</th>
        <th>Фамилия</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        @if($user->profile)
            <td>{{ $user->profile->name }}</td>
            <td>{{ $user->profile->surname }}</td>
        @else
            <td colspan="2">Нет профиля</td>
        @endif
    </tr>
    @endforeach
</table>
    </div>
</body>
</html>