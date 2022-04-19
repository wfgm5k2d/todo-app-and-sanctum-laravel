<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        $todo = Todo::all();
        return view('index')->with('todos', $todo);
    }

    public function create(){
        return view('create');
    }

    public function details(Todo $todo){
        return view('details')->with('todos', $todo);
    }

    public function edit(Todo $todo){
        return view('edit')->with('todos', $todo);
    }

    public function update(Todo $todo){
        try {
            $this->validate(request(), [
                'name' => ['required'],
                'description' => ['required'],

            ]);
        } catch (ValidationException $e) {
        }

        $data = request()->all();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();

        session()->flash('success', 'Заметка успешно обновлена');

        return redirect('/');
    }

    public function delete(){
        //
    }

    public function store(){
        try {
            $this->validate(request(), [
                'name' => ['required'],
                'description' => ['required']
            ]);
        } catch (ValidationException $e) {
        }

        $data = request()->all();

        $todo = new Todo();
        //On the left is the field name in DB and on the right is field name in Form/view
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->user_id = $data['userId'];
        $todo->save();

        session()->flash('success', 'Заметка успешно создана');

        return redirect('/');
    }
}
