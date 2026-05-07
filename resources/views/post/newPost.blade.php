<!DOCTYPE html>
<html>
<head>
    <title>Новая статья</title>
</head>
<body>
    <h1>Добавление новой статьи</h1>
    
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <div>
            <label>Заголовок:</label>
            <input type="text" name="title" required>
        </div>
        <div>
            <label>Короткое описание:</label>
            <input type="text" name="desc" required>
        </div>
        <div>
            <label>Дата:</label>
            <input type="date" name="date" required>
        </div>
        <div>
            <label>Текст:</label>
            <textarea name="text" required></textarea>
        </div>
        <button type="submit" name="submit">Создать</button>
    </form>
</body>
</html>