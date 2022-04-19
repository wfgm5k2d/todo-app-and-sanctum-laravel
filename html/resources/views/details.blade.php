@extends('layouts.app')

@section('title')
    Информация
@endsection

@section('content')

    <div class="card text-center mt-5">
        <div class="card-header">
            <b>Информация</b>
        </div>
        <div class="card-body">
            <h5 class="card-title">Название заметки</h5>
            <p class="card-text">Описание заметки</p>
            <a href="edit"><span class="btn btn-primary">Изменить</span></a>
            <a href="delete"><span class="btn btn-danger">Удалить</span></a>
        </div>
    </div>

@endsection
