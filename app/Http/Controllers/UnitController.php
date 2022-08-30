<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use Illuminate\Support\Facades\DB;

class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::all();

        return view('boq.master.masterUnit', compact('units'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $unit = new Unit;
        $unit->unit_name = $request->unit_name;
        $unit->create_by = $request->create_by;
        $unit->update_by = $request->update_by;
        $unit->save();

        return redirect()->back()->with('success', '!!! ADD DESIGNER/PM Complete !!!');
    }

    public function edit($id)
    {
        return response()->json([
            'dataEdit' => Unit::find($id)
        ]);
    }

    public function update(Request $request)
    {
        // dd($request);
        // $request->validate([
        //     'name' => 'unique:Locations'
        // ],
        // [
        //     'name.unique' => "error"
        // ]);

        $unit = Unit::find($request->id)->update([
            'unit_name' => $request->unit_name,
            'update_by' => $request->update_by
        ]);

        return back()->with('success', '!!! Edit DESIGNER/PM Complete !!!');
    }

    public function softdelete($id)
    {
        $delete = Unit::find($id)->delete();
        return redirect()->back()->with('success','!!! Delete-Complete !!!');
    }
}
