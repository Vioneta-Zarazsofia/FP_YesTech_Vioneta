<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tasks = Task::all();
        return view('task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Task::insert([
            'name' => $request->name,
            'description' => $request->description,
            'assigned_to' => $request->assigned_to,
            'due_date' => $request->due_date
        ]);

        return redirect()->route('task.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $task = Task::find($id);

        return view('task.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $task = Task::find($id);
        return view('task.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Task::where('id', $id)
            ->update([
                'name' => $request->name,
                'description' => $request->description,
                'assigned_to' => $request->assigned_to,
                'due_date' => $request->due_date
            ]);

        return redirect()->route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        //
        $task = Task::find($id);
        $task->delete();

        return redirect()->route('task.index');
    }
}