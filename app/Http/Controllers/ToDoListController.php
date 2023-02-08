<?php

namespace App\Http\Controllers;

use App\Models\ToDoList;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    public function index()
    {
        $todolists = ToDoList::all();
        return view('index', compact('todolists'));
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $data=request()->validate([
            'content' => 'string'
        ]);
        ToDoList::create($data);
        return redirect()->route('todo.index');
    }

    public function show(ToDoList $todo)
    {
        return view('show', compact('todo'));
    }

    public function edit(ToDoList $todo)
    {
        return view('edit', compact('todo'));
    }

    public function update(ToDoList $todo)
    {
        $data=request()->validate([
            'content' => 'string'
        ]);
       $todo->update($data);
       return redirect()->route('todo.show',$todo->id);
    }

    public function destroy( ToDoList $todo)
    {
        $todo->delete();
        return redirect()->route('todo.index');
    }
    

}

