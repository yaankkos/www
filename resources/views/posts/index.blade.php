<!DOCTYPE html>
<html>
<head>
    <title>Список статей</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        .container { max-width: 1000px; margin: 0 auto; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background: #4CAF50; color: white; }
        .btn-delete { background: #f44336; color: white; border: none; padding: 5px 10px; cursor: pointer; }
        .alert-success { background: #d4edda; color: #155724; padding: 10px; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Список статей</h1>
        
        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        @if($posts->count() > 0)
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Заголовок</th>
                        <th>Содержание</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($post->content, 50) }}</td>
                            <td>
                                <form action="{{ route('posts.del', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-delete" 
                                            onclick="return confirm('Удалить статью?')">
                                        Удалить
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Нет статей. Добавьте статьи через Tinker: php artisan tinker</p>
        @endif
    </div>
</body>
</html>