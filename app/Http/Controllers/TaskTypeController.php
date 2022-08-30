<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task_type;
use Illuminate\Support\Facades\DB;

class TaskTypeController extends Controller
{
    public function  index()
    {
        $task_types = task_type::all();


        return view('boq.master.task_type', compact('task_types'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $tasktype = new task_type;
        $tasktype->task_type_name = $request->task_type_name;
        $tasktype->create_by = $request->create_by;
        $tasktype->update_by = $request->update_by;
        $tasktype->save();

        return redirect()->back()->with('success', '!!! ADD TASK_TYPE Complete !!!');
    }

    public function edit($id)
    {
        return response()->json([
            'dataEdit' => task_type::find($id)
        ]);
    }

    public function update(Request $request)
    {
        // dd($request);
        $request->validate([
            'task_type_name' => 'unique:task_types'
        ],
        [
            'task_type_name.unique' => "error"
        ]);

        $tasktype = task_type::find($request->id)->update([
            'task_type_name' => $request->task_type_name,
            'update_by' => $request->update_by
        ]);

        return back()->with('success', '!!! Edit TASK NAME Complete !!!');
    }

    public function softdelete($id)
    {
        $delete = task_type::find($id)->delete();
        return redirect()->back()->with('success','!!! Delete-Complete !!!');
    }
}
