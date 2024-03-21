<?php

namespace App\Http\Controllers;

use App\Models\Todo;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', ['todos' => $todos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'text' => 'required',
            'body' => 'nullable'
        ]);

        $newProduct = Todo::create($data);
        return redirect(route('todo.index'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        return view('todos.edit', ['todo' => $todo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Todo $todo, Request $request)
    {
        $data = $request->validate([
            'text' => 'required',
            'body' => 'nullable'
        ]);

        $todo->update($data);

        return redirect(route('todo.index'))->with('success', 'Product Updated Succesffully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect(route('todo.index'))->with('success', 'Kegiatan mu Berakhir YAAAA');
    }
}
