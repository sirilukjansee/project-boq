<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catagory;
use Illuminate\Support\Facades\DB;

class FormboqController extends Controller
{
    public function index(){

<<<<<<< HEAD
        $catagories = catagory::all();
=======
        $catagories = catagory::paginate(5);
>>>>>>> a6d31ee6768e1e9b5e07b02263f99ede4cf09910
        $catagories1 = DB::table('catagory_subs')
        ->join('catagories','catagories.id','=','catagory_subs.catagory_id')
        ->select('catagories.*', 'catagory_subs.*','catagories.name as catagory_name')
        ->get();

        return view('boq.formBoq.addformBoq', compact('catagories','catagories1'));

    }
}
