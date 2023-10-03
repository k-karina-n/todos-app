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

    public function update(Request $request, int $id)
    {
        $task = Task::findOrFail($id);

        $task->update(['description' => $request->input('description')]);

        return redirect('/tasks');
    }

    public function check(int $id)
    {
        $task = Task::findOrFail($id);

        $task->done ? $task->update(['done' => 0]) : $task->update(['done' => 1]);

        return redirect('/tasks');
    }

    public function destroy(int $id)
    {
        Task::destroy($id);

        return redirect('/tasks');
    }
}
