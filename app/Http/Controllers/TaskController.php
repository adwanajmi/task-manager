<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->get('sort', 'created_at');
        $direction = $request->get('direction', 'desc');

        $tasks = Task::orderBy($sort, $direction)->get();
        $pageSlug = 'tasks';

        return view('tasks.index', compact('tasks', 'pageSlug'));
    }

    public function create()
    {

        $pageSlug = 'tasks';

        return view('tasks.create', compact('pageSlug'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        Task::create($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    public function show(Task $task)
    {
        $pageSlug = 'tasks';

        return view('tasks.show', compact('task', 'pageSlug'));
    }

    public function edit(Task $task)
    {
        $pageSlug = 'tasks';

        return view('tasks.edit', compact('task', 'pageSlug'));
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $task->is_completed = $request->has('is_completed') ? 1 : 0;

        $task->save();

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }
}
