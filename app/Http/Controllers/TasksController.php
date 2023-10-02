<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Task;

class TasksController extends Controller
{
    public function index(Task $task)
    {
        return Inertia::render('Tasks', [
            'tasks' => $task->all()->toArray()
        ]);
    }

    public function store(Request $request)
    {
        Task::insert([
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
