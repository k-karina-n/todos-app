<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class TodosController extends Controller
{
    public function show()
    {
        return Inertia::render('Todos');
    }
}
