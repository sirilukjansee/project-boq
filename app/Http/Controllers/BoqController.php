<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\DB;

class BoqController extends Controller
{
    public function index($id)
    {
        $project = Project::find($id);

        return view('boq.allBoq', compact('project'));
    }
}
