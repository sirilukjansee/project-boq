<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catagory;
use App\Models\catagory_sub;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class MasterController extends Controller
{
    public function index()
    {
        $catagories = catagory::all();
        $catagories2 = DB::table('catagory_subs')
        ->join('catagories','catagories.id','=','catagory_subs.catagory_id')
        ->select('catagories.*', 'catagory_subs.*','catagories.name as catagory_name')
        ->get();

        return view('boq.master.masterBoq', compact('catagories'));
    }

    public function index_sub($id){

        $catagories = catagory::find($id);
        $catagories3 = catagory_sub::where('catagory_id', $id)->get();

        return view('boq.master.sub_masterBoq', compact('catagories','catagories3'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = array();
        $data['name'] = $request->name;
        $data['create_by'] = $request->create_by;
        $data['update_by'] = $request->update_by;
        $data['is_active'] = $request->is_active;

        DB::table('catagories')->insert($data);

        return redirect()->back()->with('success', '!!! ADD Complete !!!');
    }

    // public function edit($id){
    //     $catagory = catagory::find($id);
    //     return response()->json([$catagory]);
    // }

    public function edit($id)
    {
        return response()->json([
            'dataEdit' => catagory::find($id)
        ]);

    }

    public function update(Request $request)
    {
        // dd($request->id);
        $request->validate([
            'name' => 'unique:catagories'
        ],
        [
            'name.unique' => "error"
        ]);

        $update = DB::table('catagories')->where('id', $request->id)->update([
            'name' => $request->name,
            'update_by' => $request->update_by,
        ]);
        // $update->name = $request->input('name');
        // $update->update_by = $request->input('update_by');
        // $update->update();

        return back()->with('success', '!!! Edit Complete !!!');
    }

    public function softdelete($id)
    {
        $delete = catagory::find($id)->delete();
        return redirect()->back()->with('success','!!! Delete-Complete !!!');
    }

    public function store_sub(Request $request)
    {
        // dd($request);
       $catagory_sub = new catagory_sub;
       $catagory_sub->catagory_id = $request->catagory_id;
       $catagory_sub->name = $request->name;
       $catagory_sub->create_by = $request->create_by;
       $catagory_sub->update_by = $request->update_by;
       $catagory_sub->is_active = $request->is_active;
       $catagory_sub->save();

        return redirect()->back()->with('success', '!!! ADD_SUB Complete !!!');
    }

    public function edit_sub($id)
    {
        // $edit = catagory_sub::find($id);
        // return response()->json($edit);
        $id2 = catagory_sub::find($id);

        return response()->json([
            'dataEdit' => $id2
        ]);

    }

    public function update_sub(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'unique:catagory_subs'
        ],
        [
            'name.unique' => "error"
        ]);

        $update_sub = catagory_sub::find($request->id)->update([
            'name' => $request->name,
            'update_by' => $request->update_by
        ]);
        return back()->with('success', '!!! Edit_SUB Complete !!!');
    }

    public function softdelete_sub($id)
    {
        $delete = catagory_sub::find($id)->delete();
        return redirect()->back()->with('success','!!! Delete-Complete !!!');
    }

}
