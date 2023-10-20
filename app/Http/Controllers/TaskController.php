<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;



class TaskController extends Controller
{
    public function index()
    {
        if (Auth::check()) {

            $tasks = Task::all();
            return view('tasks.index', ['tasks' => $tasks]);
        }
        return view('auth.login');

    }

    public function create()
    {
        if (Auth::check()) {
            return view('tasks.create');
        }
        return view('auth.login');
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            Task::create($request->all());
            return redirect()->route('tasks.index');
        }
        return view('auth.login');
    }

    public function show(Task $task)
    {
        if (Auth::check()) {
            return view('tasks.show', compact('task'));
        }
        return view('auth.login');
    }


    public function edit(Task $task)
    {
        if (Auth::check()) {
            return view('tasks.edit', compact('task'));
        }
        return view('auth.login');
    }

    public function update(Request $request, Task $task)
    {
        if (Auth::check()) {
            $task->update($request->all());
            return redirect()->route('tasks.index');
        }
        return view('auth.login');
    }

    public function destroy(Task $task)
    {
        if (Auth::check()) {
            $task->delete();
            return redirect()->route('tasks.index');
        }
        return view('auth.login');
    }

}
