<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\todo;
use Illuminate\Http\Request;

class Todocontroller extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('index', compact('todos'));
    }
    public function store(TodoRequest $request)
    {
        $todo = $request->only(['content']);
        Todo::create($todo);
        return redirect('/')->with('message', 'Todoを作成しました');
    }
}
