@extends('layouts.app')

@section('title')
    Создание заметки
@endsection

@section('content')

    <form action="" method="post" class="mt-4 p-4">
        <div class="form-group m-3">
            <label for="name">Название</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group m-3">
            <label for="description">Описание</label>
            <textarea class="form-control" name="description" rows="3"></textarea>
        </div>
        <div class="form-group m-3">
            <input type="submit" class="btn btn-primary float-end" value="Создать">
        </div>
    </form>

@endsection
