<!DOCTYPE html>
<html>
<head><title>Админка гостевой книги</title></head>
<body>
    <h1>Модерация сообщений</h1>
    
    @foreach($messages as $msg)
        <div style="border:1px solid #ccc; margin:10px; padding:10px">
            <strong>{{ $msg->author }}</strong> ({{ $msg->created_at }})<br>
            {{ $msg->content }}<br>
            Статус: {{ $msg->approved ? 'Одобрено' : 'Не одобрено' }}<br>
            <a href="/admin/guestbook/approve/{{ $msg->id }}">Одобрить</a> |
            <a href="/admin/guestbook/edit/{{ $msg->id }}">Редактировать</a> |
            <a href="/admin/guestbook/delete/{{ $msg->id }}" onclick="return confirm('Удалить?')">Удалить</a>
        </div>
    @endforeach
    
    <p><a href="/guestbook">На главную</a></p>
</body>
</html>