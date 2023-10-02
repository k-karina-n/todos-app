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
            'description' => $request->input('task'),
        ]);

        return redirect('/tasks');
    }

    public function update()
    {
        // edit task
    }

    public function check()
    {
        // add or remove a checkmark 
    }

    public function delete()
    {
        //delete a task
    }
}