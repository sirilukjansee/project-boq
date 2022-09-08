<?php

namespace App\Http\Controllers;

use App\Models\Brand;
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

    public function index_sub($id)
    {
        $data = array(
            'catagories' => catagory::find($id),
            'catagories3' => catagory_sub::where('catagory_id', $id)->get(),
            'data_brand' => Brand::get()
        );

        return view('boq.master.sub_masterBoq', $data);
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

        return back()->with('success', '!!! Edit Complete !!!');
    }

    // public function softdelete($id)
    // {
    //     $delete = catagory::find($id)->delete();
    //     return redirect()->back()->with('success','!!! Delete-Complete !!!');
    // }

    public function changeStatus($id)
    {
        // return "dd";
        $data = catagory::find($id);

        if ($data->is_active == "1") {
            catagory::where('id',$data->id)->update([
                'is_active' => "0",
                'update_by' => 1
            ]);
        }else {
            catagory::where('id',$data->id)->update([
                'is_active' => "1",
                'update_by' => 1
            ]);
        }
        return redirect()->back()->with('success','!!! Status Complete !!!');
    }

    public function store_sub(Request $request)
    {
        // dd($request);
       $catagory_sub = new catagory_sub;
       $catagory_sub->code = $request->code1.$request->code2.$request->code3;
       $catagory_sub->catagory_id = $request->catagory_id;
       $catagory_sub->name = $request->name;
       $catagory_sub->brand_id = implode( ',', $request->brand_id);
       $catagory_sub->create_by = 1;
       $catagory_sub->update_by = 1;
       $catagory_sub->is_active = "1";
       $catagory_sub->save();

        return redirect()->back()->with('success', '!!! ADD_SUB Complete !!!');
    }

    public function edit_sub($id)
    {
        $id2 = catagory_sub::find($id);

        return response()->json([
            'dataEdit' => $id2,
            'dataBrand' => Brand::get()
        ]);

    }

    public function update_sub(Request $request)
    {
        $update_sub = catagory_sub::find($request->id)->update([
            'code' => $request->code1.$request->code2.$request->code3,
            'name' => $request->name,
            'brand_id' => implode( ',', $request->brand_id),
            'update_by' => 1
        ]);
        return back()->with('success', '!!! Edit_SUB Complete !!!');
    }

    // public function softdelete_sub($id)
    // {
    //     $delete = catagory_sub::find($id)->delete();
    //     return redirect()->back()->with('success','!!! Delete-Complete !!!');
    // }

    public function changeStatus_sub($id)
    {
        $data = catagory_sub::find($id);

        if ($data->is_active == "1") {
            catagory_sub::find($data->id)->update([
                'is_active' => "0",
                'update_by' => 1
            ]);
        }else {
            catagory_sub::find($data->id)->update([
                'is_active' => "1",
                'update_by' => 1
            ]);
        }
        return redirect()->back()->with('success','!!! Status Complete !!!');
    }

}
