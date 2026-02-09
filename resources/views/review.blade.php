@extends('layout')

@section('title')Отзывы@endsection

@section('main_content')
<h1>Форма добавления отзыва</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    </div>
@endif

<form method="post" action="/review/check">
    @csrf
    <input type="email" name="email" id="email" placeholder="введите email" class="form-control"><BR>
    <input type="text" name="subject" id="subject" placeholder="Введите отзыв" class="form-control"><BR>
    <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea><BR>
    <button type="submit" class="btn btn-success">Отправить</button>

</form>
@endsection