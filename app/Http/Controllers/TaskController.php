<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        $tasks = DB::select('select * from tasks');
        return view('tasks.index', compact('tasks'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response1
     */
    public function create()
    {
        $tasks = DB::select('select * from tasks');
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
        $request->validate([
            'name' => 'required|string|max:50',
            'created_by' => 'required|exists:users,id',
            'assigned_to' => 'required|exists:users,name',
            'status' => 'required', Rule::in(['created', 'assigned', 'in_progress', 'done']),
            'description' => "required|string",

        ]);
    } catch (\Exception $e) {
        print_r($e->getMessage());
        exit();
    }


        Task::create($request->all());
        return redirect()->route('tasks.index')->with('message', 'Contact has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.show')->with('task', $task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        try {
            $request->validate([
                'name' => 'required|string|max:50',
                'created_by' => 'required|exists:users,id',
                'assigned_to' => 'required|exists:users,name',
                'status' => 'required', Rule::in(['created', 'assigned', 'in_progress', 'done']),
                'description' => "required|string",

            ]);
        } catch (\Exception $e) {
            print_r($e->getMessage());
            exit();
        }


            $task->update($request->all());
            return redirect()->route('tasks.index')->with('message', 'Contact has been updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('tasks.index')->with('message', 'Contact has been deleted successfully');
    }
}
