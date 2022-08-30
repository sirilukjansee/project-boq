<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index(){
        $project = Project::all();

        return view('boq.index', compact('project'));
    }

    public function create()
    {
        return view('boq.addprojectBoq');
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

        return redirect()->route('index')->with('success', '!!! Add Project Complete !!!');
    }
}
