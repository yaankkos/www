@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Корзина (удаленные статьи)</h1>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        @if($deletedPosts->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Заголовок</th>
                        <th>Дата удаления</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($deletedPosts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->deleted_at->format('d.m.Y H:i') }}</td>
                            <td>
                                <!-- Ссылка на восстановление будет добавлена в задаче 27.6 -->
                                <a href="{{ route('posts.restore', $post->id) }}" 
                                   class="btn btn-sm btn-success"
                                   onclick="return confirm('Восстановить статью «{{ $post->title }}»?')">
                                    Восстановить
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-info">
                Корзина пуста. Нет удаленных статей.
            </div>
        @endif
        
        <a href="{{ route('posts.index') }}" class="btn btn-primary">Назад к списку статей</a>
    </div>
@endsection