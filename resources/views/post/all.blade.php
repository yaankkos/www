<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Список статей</title>
</head>
<body>
    <h1>Список статей</h1>
@extends('layout')

@section('content')
    <h1>Список статей</h1>
    
    <div style="margin-bottom: 20px;">
        <strong>Сортировать по:</strong>
        <a href="{{ route('posts.all', ['order' => 'id']) }}">ID</a> |
        <a href="{{ route('posts.all', ['order' => 'title']) }}">Названию</a> |
        <a href="{{ route('posts.all', ['order' => 'date']) }}">Дате</a>
        
        <span style="margin-left: 20px; color: #666;">
            Текущая сортировка: {{ $currentOrder }}
        </span>
    </div>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Заголовок</th>
                <th>Описание</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>
                    <a href="{{ route('posts.one', ['id' => $post->id]) }}">
                        {{ $post->title }}
                    </a>
                </td>
                <td>{{ \Illuminate\Support\Str::limit($post->content, 100) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
        </tbody>
    </table>
@endsection
</body>
</html>