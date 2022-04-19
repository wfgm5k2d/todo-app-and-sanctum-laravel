@extends('layouts.app')
@section('title')
    Редактирование
@endsection
@section('content')

    <form action="" method="post" class="mt-4 p-4">
        <div class="form-group m-3">
            <label for="name">Название</label>
            <input type="text" class="form-control" name="" value="Название">
        </div>
        <div class="form-group m-3">
            <label for="description">Описание</label>
            <textarea class="form-control" rows="3">Описание заметки</textarea>
        </div>
        <div class="form-group m-3">
            <input type="submit" class="btn btn-primary float-end" value="Сохранить">
        </div>
    </form>

@endsection
