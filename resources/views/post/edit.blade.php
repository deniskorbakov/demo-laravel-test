@extends('template.html')

@section('title')
    Edit
@endsection

@section('content')
    <div class="container mt-5">
        <h1 class="text-center text-white mt-2">Обновить статью</h1>
        <form action="{{ route('post.update', $post->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <input type="text" class="form-control mt-4" name="title" placeholder="Введите заголовок" value="{{$post->title}}">
            </div>

            <div class="form-group mt-4">
                <input type="text" class="form-control" name="image" placeholder="Введите картинку" value="{{ $post->image }}">
            </div>

            <div class="form-group mt-4">
                <textarea class="form-control" name="content" placeholder="Введите текст">{{ $post->content }}</textarea>
            </div>


            <button class="btn btn-dark mt-3" type="submit">Обновить</button>
        </form>
    </div>
@endsection

