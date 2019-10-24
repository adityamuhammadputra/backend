<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        // $data = [
        //     'hai' => Auth::user()->name,
        //     'todolist' => $todo,
        // ];

        return response()->json($todos, 200);
    }

    public function store(Request $request)
    {
        $input = [
            'category_id' => 1,
            'user_id' => 1,
            'title' => $request->title,
            'desc' => 'Ini masih hardcode'
        ];

        Todo::create($input);

        return response()->json('Berhasil', 200);
    }

    public function edit(Todo $todo)
    {
        return response()->json($todo, 200);
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->title = $request->title;
        $todo->save();

        return response()->json('Berhasil', 200);
    }

    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        return response()->json('Berhasil', 200);
    }
}
