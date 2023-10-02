<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Todo;

class TodosController extends Controller
{
    public function show(Todo $todo)
    {
        $csrfToken = csrf_token();

        return Inertia::render('Todos', [
            'csrfToken' => $csrfToken,
            'todos' => $todo->all()->toArray()
        ]);
    }

    public function create(Request $request)
    {
        Todo::insert([
            'description' => $request->input('todo'),
        ]);

        return redirect('/');
    }

    public function mark()
    {
        dd('success');
    }
}
