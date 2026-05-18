<!DOCTYPE html>
<html>
<head><title>Редактирование</title></head>
<body>
    <h1>Редактировать сообщение</h1>
    <form method="POST" action="/admin/guestbook/update/{{ $message->id }}">
        @csrf
        <input type="text" name="author" value="{{ $message->author }}"><br>
        <textarea name="content">{{ $message->content }}</textarea><br>
        <button type="submit">Сохранить</button>
    </form>
</body>
</html>