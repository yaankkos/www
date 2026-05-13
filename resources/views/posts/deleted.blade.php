<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина - Удаленные статьи</title>
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
            background: #6c757d;
            color: white;
            padding: 20px 30px;
            font-size: 24px;
            margin: 0;
        }
        
        .back-link {
            display: inline-block;
            margin: 20px 30px;
            color: #4a90e2;
            text-decoration: none;
            font-size: 14px;
        }
        
        .back-link:hover {
            text-decoration: underline;
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
        
        .btn-restore {
            background: #28a745;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
            display: inline-block;
            transition: background 0.2s;
        }
        
        .btn-restore:hover {
            background: #218838;
        }
        
        .btn-restore-form {
            background: #28a745;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background 0.2s;
        }
        
        .btn-restore-form:hover {
            background: #218838;
        }
        
        .empty {
            text-align: center;
            padding: 60px 20px;
            color: #6c757d;
            font-size: 16px;
        }
        
        .badge {
            background: #dc3545;
            color: white;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: normal;
        }
        
        .deleted-date {
            color: #6c757d;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🗑️ Корзина (удаленные статьи)</h1>
        
        <a href="{{ route('posts.index') }}" class="back-link">← Назад к списку статей</a>
        
        @if(session('success'))
            <div class="alert-success">
                ✅ {{ session('success') }}
            </div>
        @endif
        
        @if($deletedPosts->count() > 0)
            <table>
                <thead>
                    <tr>
                        <th style="width: 60px">ID</th>
                        <th>Заголовок</th>
                        <th>Содержание</th>
                        <th>Дата удаления</th>
                        <th style="width: 140px">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($deletedPosts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>
                                <strong>{{ $post->title }}</strong>
                                <span class="badge">Удалена</span>
                            </td>
                            <td>
                                <div class="deleted-date">
                                    {{ \Illuminate\Support\Str::limit($post->content ?? 'Содержание отсутствует', 80) }}
                                </div>
                            </td>
                            <td>
                                <div class="deleted-date">
                                    {{ $post->deleted_at ? $post->deleted_at->format('d.m.Y H:i:s') : 'Неизвестно' }}
                                </div>
                            </td>
                            <td>
                                <!-- Задача 27.6: Ссылка на восстановление статьи -->
                                <form action="{{ route('posts.restore', $post->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn-restore-form" 
                                            onclick="return confirm('Восстановить статью «{{ $post->title }}»?')">
                                        ♻️ Восстановить
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="empty">
                <p>📭 Корзина пуста</p>
                <p style="font-size: 12px; margin-top: 10px;">
                    Нет удаленных статей
                </p>
            </div>
        @endif
    </div>
</body>
</html>