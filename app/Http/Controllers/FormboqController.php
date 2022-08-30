<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catagory;
use Illuminate\Support\Facades\DB;

class FormboqController extends Controller
{
    public function index(){

        $catagories = catagory::paginate(5);
        $catagories1 = DB::table('catagory_subs')
        ->join('catagories','catagories.id','=','catagory_subs.catagory_id')
        ->select('catagories.*', 'catagory_subs.*','catagories.name as catagory_name')
        ->get();

        return view('boq.formBoq.addformBoq', compact('catagories','catagories1'));

    }
}
