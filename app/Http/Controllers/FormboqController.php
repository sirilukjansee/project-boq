<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catagory;
use App\Models\catagory_sub;
use App\Models\Unit;
use App\Models\Project;
use App\Models\Brand;
use App\Models\template_boqs;
use Illuminate\Support\Facades\DB;

class FormboqController extends Controller
{
    public function index($id){

        $project = Project::find($id);
        $template_boq = template_boqs::where('project_id',  $id)->first();
        $catagories = catagory::all();
        // $catagories1 = catagory_sub::where('brand_id', 'LIKE','%'.$project->brand_id.'%')
        // ->get();
        $brand_master = Brand::all();
        $catagories2 = Unit::all();

        // echo $catagories1;
        return view('boq.formBoq.addformBoq', compact('catagories','catagories2','brand_master','project','template_boq'));

    }

    public function select_catagory()
    {
        return response()->json([
            'data' => catagory::all(),
            'dataSub' => catagory_sub::all()
        ]);
    }
}
