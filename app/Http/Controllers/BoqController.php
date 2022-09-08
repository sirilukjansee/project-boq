<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Boq;
use App\Models\template_boqs;
use Carbon\Carbon;
use App\Exports\BoqsExport;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Auth;
use Maatwebsite\Excel\Facades\Excel;


class BoqController extends Controller
{
    public function index($id)
    {
        $project = Project::leftjoin('brands','projects.brand','brands.brand_name')
        ->where('projects.id',$id)
        ->select('projects.*','brands.id as brand_id')
        ->first();

        $temp_boq = template_boqs::where('project_id', $id)
            ->get();

        return view('boq.allBoq', compact('project','temp_boq'));
    }

    public function store(Request $request)
    {
        $data_number = Project::where('id', $request->project_id)
            ->first();
            // return $data_number->number_id;
        // $project_y = Carbon::today()->format('Y');
        // $project_y_cut = substr($project_y, -2);

        $data = template_boqs::where('project_id', $request->project_id)
            ->count();

        $number_id = str_pad($data, 4, '0', STR_PAD_LEFT);

            if($data >= 1)
            {
                $template = template_boqs::create([
                    'number_id' => $data_number->number_id."-".$number_id,
                    'project_id' => $request->project_id,
                    'name'  =>  "Additional BOQ",
                    'date'  =>  Carbon::now(),
                    'status'    =>  "0",
                    'create_by' =>  1,
                    'update_by' =>  1
                ])->id;
            }else
            {
                $template = template_boqs::create([
                    'number_id' => $data_number->number_id."-".$number_id,
                    'project_id' => $request->project_id,
                    'name'  =>  "Master BOQ",
                    'date'  =>  Carbon::now(),
                    'status'    =>  "0",
                    'create_by' =>  1,
                    'update_by' =>  1
                ])->id;
            }
            // return $template;
        foreach($request->main_id as $key => $value)
        {
            foreach($request->code_id[$key] as $key2 => $value2)
            {
                if($value2)
                {
                    $boq = new Boq;
                    $boq->template_boq_id = $template;
                    $boq->main_id = ($key2);
                    $boq->sub_id = ($value2);
                    $boq->amount = ($request->amount[$key][$key2]);
                    $boq->unit_id = ($request->unit_id[$key][$key2]);
                    $boq->desc = ($request->desc[$key][$key2]);
                    $boq->total = $request->total;
                    $boq->status = "0";
                    $boq->comment = $request->comment;
                    $boq->create_by = 1;
                    $boq->update_by = 1;
                    $boq->save();
                }
            }
        }
        return redirect(route('allBoq', ['id' => $request->project_id]))->with('success', '!!! ADD BOQ Complete !!!');
    }

    public function export()
    {
        return Excel::download(new BoqsExport, 'Project.xlsx');
    }


}
