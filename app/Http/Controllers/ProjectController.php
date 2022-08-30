<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
<<<<<<< HEAD
use App\Models\Brand;
use App\Models\Location;
use App\Models\task_type;
use App\Models\taskname;
use App\Models\design_and_pm;
=======
>>>>>>> a6d31ee6768e1e9b5e07b02263f99ede4cf09910
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index(){
        $project = Project::all();

        return view('boq.index', compact('project'));
    }

    public function create()
    {
<<<<<<< HEAD
        $project = Project::all();
        $project1 = Brand::all();
        $project2 = Location::all();
        $project3 = task_type::all();
        $project4 = taskname::all();
        $project5 = design_and_pm::all();

        return view('boq.addprojectBoq', compact('project','project1','project2','project3','project4','project5'));
=======
        return view('boq.addprojectBoq');
>>>>>>> a6d31ee6768e1e9b5e07b02263f99ede4cf09910
    }

    public function store(Request $request)
    {
        // dd($request);
        $project = new Project;
        $project->brand = $request->brand;
        $project->location = $request->location;
        $project->area = $request->area;
        $project->unit = $request->unit;
        $project->io = $request->io;
        $project->task = $request->task;
        $project->task_n = $request->task_n;
        $project->start_date = $request->startDate;
        $project->finish_date = $request->finishDate;
        $project->all_date = $request->alldate;
        $project->open_date = $request->openDate;
        $project->designer_name = $request->ds_name;
        $project->project_manager = $request->pm_name;
        $project->save();

<<<<<<< HEAD
        // return $project->id;
        return redirect(route('allBoq', ['id' => $project->id]))->with('success', '!!! Add Project Complete !!!');
=======
        return redirect()->route('index')->with('success', '!!! Add Project Complete !!!');
>>>>>>> a6d31ee6768e1e9b5e07b02263f99ede4cf09910
    }
}
