<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::all();

        return view('boq.master.masterLocation', compact('locations'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $location = new Location;
        $location->location_name = $request->location_name;
        $location->create_by = $request->create_by;
        $location->update_by = $request->update_by;
        $location->save();

        return redirect()->back()->with('success', '!!! ADD DESIGNER/PM Complete !!!');
    }

    public function edit($id)
    {
        return response()->json([
            'dataEdit' => Location::find($id)
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

        $location = Location::find($request->id)->update([
            'location_name' => $request->location_name,
            'update_by' => $request->update_by
        ]);

        return back()->with('success', '!!! Edit DESIGNER/PM Complete !!!');
    }

    public function softdelete($id)
    {
        $delete = Location::find($id)->delete();
        return redirect()->back()->with('success','!!! Delete-Complete !!!');
    }
}
