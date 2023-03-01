@extends('template.admin')

@section('contentAdmin')
    <div class="container mt-2">
        <h1 class="text-white">Пост номер: {{$post->id}}</h1>

        <article class="alert alert-dark mt-3" role="alert">
            <div class="container">
                <p class="text-dark mt-2">{{$post->content}}</p>
                <p class="text-dark mt-2">IMAGE: {{$post->image}}</p>
                <em>Дата публикации: {{$post->created_at}}</em><br>
                <a class="btn btn-dark mt-4" href="{{ route('admin.post.index') }}">Выйти из поста</a>
                <a class="btn btn-dark mt-4  ms-2" href="{{ route('admin.post.edit', $post->id) }}">Изменить</a>
            </div>
        </article>

        <form action="{{ route('admin.post.delete', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Удалить пост" class="btn btn-danger">
        </form>
    </div>
@endsection

