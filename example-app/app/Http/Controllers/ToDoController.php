<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todo = ToDo::all();
        return view('todo.index', ['todo' => $todo]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todo.edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $todo = new ToDo();
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->save();
        return redirect()->route('todo.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $find = ToDo::find($id);
        return view('todo.show', ['title' => $find->title, 'description' => $find->description]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ToDo $toDo)
    {
        //
    }
}
