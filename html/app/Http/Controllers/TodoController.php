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

    public function details(){
        return view('details');
    }

    public function edit(){
        return view('edit');
    }

    public function update(){
        //
    }

    public function delete(){
        //
    }
}
