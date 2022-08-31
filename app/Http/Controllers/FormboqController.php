<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catagory;
use App\Models\Unit;
use Illuminate\Support\Facades\DB;

class FormboqController extends Controller
{
    public function index(){

        $catagories = catagory::all();
        $catagories1 = DB::table('catagory_subs')
        ->join('catagories','catagories.id','=','catagory_subs.catagory_id')
        ->select('catagories.*', 'catagory_subs.*','catagories.name as catagory_name')
        ->get();
        $catagories2 = Unit::all();

        return view('boq.formBoq.addformBoq', compact('catagories','catagories1','catagories2'));

    }

    public function select_catagory()
    {
        return response()->json([
            'data' => catagory::all()
        ]);
    }
}
