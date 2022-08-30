<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\taskname;
use Illuminate\Support\Facades\DB;

class TaskNameController extends Controller
{
    public function  index()
    {
        $tasknames = taskname::all();


        return view('boq.master.task_name', compact('tasknames'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $taskname = new taskname;
        $taskname->task_name = $request->task_name;
        $taskname->create_by = $request->create_by;
        $taskname->update_by = $request->update_by;
        $taskname->save();

        return redirect()->back()->with('success', '!!! ADD TASK_NAME Complete !!!');
    }

    public function edit($id)
    {
        return response()->json([
            'dataEdit' => taskname::find($id)
        ]);
    }

    public function update(Request $request)
    {
        // dd($request);
        $request->validate([
            'task_name' => 'unique:tasknames'
        ],
        [
            'task_name.unique' => "error"
        ]);

        $taskname = taskname::find($request->id)->update([
            'task_name' => $request->task_name,
            'update_by' => $request->update_by
        ]);

        return back()->with('success', '!!! Edit TASK NAME Complete !!!');
    }

    public function softdelete($id)
    {
        $delete = taskname::find($id)->delete();
        return redirect()->back()->with('success','!!! Delete-Complete !!!');
    }

}
