<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список статей</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif;
            background: #f5f7fb;
            padding: 40px 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        
        h1 {
            background: #4a90e2;
            color: white;
            padding: 20px 30px;
            font-size: 24px;
            margin: 0;
        }
        
        .alert-success {
            background: #d4edda;
            color: #155724;
            padding: 15px 20px;
            margin: 20px;
            border-radius: 6px;
            border-left: 4px solid #28a745;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th {
            background: #f8f9fa;
            padding: 15px 20px;
            text-align: left;
            font-weight: 600;
            color: #495057;
            border-bottom: 2px solid #dee2e6;
        }
        
        td {
            padding: 15px 20px;
            border-bottom: 1px solid #dee2e6;
            color: #212529;
        }
        
        tr:hover {
            background: #f8f9fa;
        }
        
        .btn-delete {
            background: #dc3545;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background 0.2s;
        }
        
        .btn-delete:hover {
            background: #c82333;
        }
        
        .empty {
            text-align: center;
            padding: 60px 20px;
            color: #6c757d;
            font-size: 16px;
        }
        
        .content-preview {
            max-width: 300px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            color: #6c757d;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📝 Список статей</h1>
        
        @if(session('success'))
            <div class="alert-success">
                ✅ {{ session('success') }}
            </div>
        @endif
        
        @if($posts->count() > 0)
            <table>
                <thead>
                    <tr>
                        <th style="width: 60px">ID</th>
                        <th>Заголовок</th>
                        <th>Содержание</th>
                        <th style="width: 120px">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td><strong>{{ $post->title }}</strong></td>
                            <td>
                                <div class="content-preview">
                                    {{ \Illuminate\Support\Str::limit($post->content ?? 'Нет содержания', 80) }}
                                </div>
                            </td>
                            <td>
                                <form action="{{ route('posts.del', $post->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-delete" 
                                            onclick="return confirm('Вы уверены, что хотите удалить статью «{{ $post->title }}»?')">
                                        🗑️ Удалить
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="empty">
                <p>📭 Нет статей</p>
                <p style="font-size: 12px; margin-top: 10px;">
                    Добавьте статьи через команду: php artisan tinker
                </p>
            </div>
        @endif
    </div>
</body>
</html>