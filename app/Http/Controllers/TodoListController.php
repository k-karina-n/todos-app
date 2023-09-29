<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class TodoListController extends Controller
{
    public function show()
    {
        return Inertia::render('TodoList');
    }
}
