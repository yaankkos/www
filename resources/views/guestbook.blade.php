<!DOCTYPE html>
<html>
<head><title>Гостевая книга</title></head>
<body>
    <h1>Гостевая книга</h1>
    
    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif
    
    @foreach($messages as $msg)
        <div style="border:1px solid #ccc; margin:10px; padding:10px">
            <strong>{{ $msg->author }}</strong> ({{ $msg->created_at }})<br>
            {{ $msg->content }}
        </div>
    @endforeach
    
    <form method="POST" action="/guestbook">
        @csrf
        <input type="text" name="author" placeholder="Ваше имя" required><br>
        <textarea name="content" placeholder="Сообщение" required></textarea><br>
        <button type="submit">Отправить</button>
    </form>
    
    <p><a href="/admin/guestbook">Админка</a></p>
</body>
</html>