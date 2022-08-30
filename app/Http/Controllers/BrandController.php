<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();

        return view('boq.master.masterBrand', compact('brands'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $brand = new Brand;
        $brand->brand_name = $request->brand_name;
        $brand->create_by = $request->create_by;
        $brand->update_by = $request->update_by;
        $brand->save();

        return redirect()->back()->with('success', '!!! ADD DESIGNER/PM Complete !!!');
    }

    public function edit($id)
    {
        return response()->json([
            'dataEdit' => Brand::find($id)
        ]);
    }

    public function update(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'unique:Brands'
        ],
        [
            'name.unique' => "error"
        ]);

        $design_pm = Brand::find($request->id)->update([
            'brand_name' => $request->brand_name,
            'update_by' => $request->update_by
        ]);

        return back()->with('success', '!!! Edit DESIGNER/PM Complete !!!');
    }

    public function softdelete($id)
    {
        $delete = Brand::find($id)->delete();
        return redirect()->back()->with('success','!!! Delete-Complete !!!');
    }
}
