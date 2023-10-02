<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Todo;

class TodosController extends Controller
{
    public function index(Todo $todo)
    {
        $csrfToken = csrf_token();

        return Inertia::render('Todos', [
            'csrfToken' => $csrfToken,
            'todos' => $todo->all()->toArray()
        ]);
    }

    public function store(Request $request)
    {
        Todo::insert([
            'description' => $request->input('todo'),
        ]);

        return redirect('/tasks');
    }

    public function update()
    {
    }

    public function check()
    {
    }

    public function delete()
    {
    }
}
