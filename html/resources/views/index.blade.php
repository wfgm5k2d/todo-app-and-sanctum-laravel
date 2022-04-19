@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a href="/"><span class="navbar-brand mb-0 h1">Мой лист заметок</span></a>
            <a href="/create"><span class="btn btn-primary">Создать заметку</span></a>
        </div>
    </nav>

    <div class="row mt-3">
        <div class="col-12 align-self-center">
            <ul class="list-group">
                @foreach($todos as $todo)
                    <li class="list-group-item">
                        <a href="details/{{$todo->id}}" style="color: cornflowerblue">{{$todo->name}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
