<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::paginate(10);
        return view('tasks_form.index',compact('tasks'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('tasks_form.taskform');
    }

    /**
     * Store a newly created resource in storage.
     */
        public function store(Request $request)
        {
            $validator = Validator::make($request->all(),[
                'taskname'=>'required|min:5|string',
                'description'=>'required|min:10|string',
                'project'=>'required|min:5|string',
                'assigned_to'=>'required|min:5|string',
                'priority'=>'required|min:5|string',
                'status'=>'required|min:5|string',
                'startdate'=>'required|min:5|string',
                'duedate'=>'required|min:5|string',
                'estimated_hours'=>'required|min:5|string',
                'attachment'=>'required|image|mimes:jpeg,jpg,webp|max:2048',
            ]);

            if($validator->fails())
                {
                    return redirect()->back()->withErrors($validator)->withInput();
                }

                $image = $request->file('attachment');
                $image_Name = time() . '.' .$image->extension();

                $image->storeAs('tasks',$image_Name,'public');

                $data = $validator->validated();

                $data['attachment'] = $image_Name;

                return redirect()->route('tasks_form.taskform')->with('success','Task created successfully');
        }

        /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
