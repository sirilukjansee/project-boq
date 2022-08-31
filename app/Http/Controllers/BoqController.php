<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\DB;

class BoqController extends Controller
{
    public function index($id)
    {
        $project = Project::leftjoin('brands','projects.brand','brands.brand_name')
        ->where('projects.id',$id)
        ->select('projects.*','brands.id as brand_id')
        ->first();

        return view('boq.allBoq', compact('project'));
    }


}
