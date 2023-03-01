@extends('template.admin')

@section('contentAdmin')
    <div class="container mt-5">
        <h1 class="text-center text-white mt-2">Создание статьи</h1>
        <form action="{{ route('admin.post.store') }}" method="post">
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
        <a href="{{ route('admin.post.index') }}" class="btn btn-danger mt-5">Выйти назад</a>
    </div>
@endsection

