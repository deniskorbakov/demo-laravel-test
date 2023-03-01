@extends('template.html')

@section('title')
    Create
@endsection

@section('content')
    <div class="container mt-5">
        <h1 class="text-center text-white mt-2">Создание статьи</h1>
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control mt-4" name="title" placeholder="Введите заголовок">
            </div>

            <div class="form-group mt-4">
                <input type="text" class="form-control" name="image" placeholder="Введите картинку">
            </div>

            <div class="form-group mt-4">
                <textarea class="form-control" name="content" placeholder="Введите текст"></textarea>
            </div>


            <button class="btn btn-dark mt-3" type="submit">Отправить</button>
        </form>
    </div>
@endsection

