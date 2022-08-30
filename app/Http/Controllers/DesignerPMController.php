<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\design_and_pm;
use Illuminate\Support\Facades\DB;

class DesignerPMController extends Controller
{
    public function index()
    {
        $design_and_pms = design_and_pm::all();


        return view('boq.master.masterDesignPM', compact('design_and_pms'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $design_pm = new design_and_pm;
        $design_pm->name = $request->name;
        $design_pm->email = $request->email;
        $design_pm->tel = $request->tel;
        $design_pm->create_by = $request->create_by;
        $design_pm->update_by = $request->update_by;
        $design_pm->save();

        return redirect()->back()->with('success', '!!! ADD DESIGNER/PM Complete !!!');
    }

    public function edit($id)
    {
        return response()->json([
            'dataEdit' => design_and_pm::find($id)
        ]);
    }

    public function update(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'unique:design_and_pms'
        ],
        [
            'name.unique' => "error"
        ]);

        $design_pm = design_and_pm::find($request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
            'update_by' => $request->update_by
        ]);

        return back()->with('success', '!!! Edit DESIGNER/PM Complete !!!');
    }

    public function softdelete($id)
    {
        $delete = design_and_pm::find($id)->delete();
        return redirect()->back()->with('success','!!! Delete-Complete !!!');
    }
}