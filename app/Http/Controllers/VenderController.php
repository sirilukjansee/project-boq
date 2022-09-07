<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vender;
use Illuminate\Support\Facades\DB;

class VenderController extends Controller
{
    public function  index()
    {
        $venders = Vender::all();


        return view('boq.master.masterVender', compact('venders'));
    }
    public function store(Request $request)
    {
        // dd($request);
        $vend = new vender;
        $vend->first_name = $request->first_name;
        $vend->last_name = $request->last_name;
        $vend->create_by = $request->create_by;
        $vend->update_by = $request->update_by;
        $vend->save();

        return redirect()->back()->with('success', '!!! ADD VENDER Complete !!!');
    }
    public function edit($id)
    {
        return response()->json([
            'dataEdit' => vender::find($id)
        ]);
    }
    public function update(Request $request)
    {
        // dd($request);
        // $request->validate([
        //     'task_type_name' => 'unique:task_types'
        // ],
        // [
        //     'task_type_name.unique' => "error"
        // ]);

        $venders = vender::find($request->id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'update_by' => $request->update_by
        ]);

        return back()->with('success', '!!! Edit VENDER Complete !!!');
    }

    public function softdelete($id)
    {
        $delete = vender::find($id)->delete();
        return redirect()->back()->with('success','!!! Delete-Complete !!!');
    }
}
