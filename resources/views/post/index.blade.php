@extends('template.html')

@section('title')
    Post
@endsection

@section('content')
    <div class="container text-center mt-5">
        <h1>Просмотр статей</h1>

        <a href="{{ route('post.create') }}" class="btn btn-dark mt-5">Создать пост</a>
    </div>
    @foreach($posts as $post)
        <div class="container mt-2">
            <h1 class="text-white">{{$post->title}}</h1>

            <article class="alert alert-dark mt-3" role="alert">
                <div class="container">
                    <p class="text-dark mt-2">{{$post->content}}</p>
                    <em>Дата публикации: {{$post->created_at}}</em><br>
                    <a class="btn btn-success mt-3" href="{{ route('post.show',$post->id) }}">Перейти к прочтению</a>
                </div>
            </article>
        </div>
    @endforeach

    <div class="container">
        {{ $posts->links() }}
    </div>
@endsection

