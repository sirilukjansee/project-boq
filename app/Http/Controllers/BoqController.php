<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Boq;
use App\Models\template_boqs;
use App\Models\catagory;
use App\Models\Unit;
use App\Models\Brand;
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
            // ->paginate(5)
            ->get();

        return view('boq.allBoq', compact('project','temp_boq'));
    }

    public function store(Request $request)
    {
        // dd($request);
        if( $request->btn_send == "btn_send" )
        {
            $send_form = "1";
        }else
        {
            $send_form = "0";
        }

        $data_number = Project::where('id', $request->project_id)
            ->first();

        $data = template_boqs::where('project_id', $request->project_id)
            ->count();

            if($data >= 1)
            {
                $number_id = str_pad($data, 4, '0', STR_PAD_LEFT);
                $template = template_boqs::create([
                    'number_id' => $data_number->number_id."-".$number_id,
                    'project_id' => $request->project_id,
                    'name'  =>  "Additional BOQ",
                    'date'  =>  Carbon::now(),
                    'status'    =>  $send_form,
                    'create_by' =>  1,
                    'update_by' =>  1
                ])->id;
            }else
            {
                $number_id2 = str_pad(1, 4, '0', STR_PAD_LEFT);
                $template = template_boqs::create([
                    'number_id' => $data_number->number_id."-".$number_id2,
                    'project_id' => $request->project_id,
                    'name'  =>  "Master BOQ",
                    'date'  =>  Carbon::now(),
                    'status'    =>  $send_form,
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
                    $boq->status = $send_form;
                    $boq->comment = $request->comment;
                    $boq->create_by = 1;
                    $boq->update_by = 1;
                    $boq->save();
                }
            }
        }
        return redirect(route('allBoq', ['id' => $request->project_id]))->with('success', '!!! ADD BOQ Complete !!!');
    }
    public function edit($id)
    {
        $editboq = Boq::where('template_boq_id', $id)->get();
        $catagories = catagory::all();
        $brand_master = Brand::all();
        $catagories2 = Unit::all();
        $project_id = template_boqs::where('id' ,$id)->first();
        return view('boq.formBoq.editformBoq', compact('editboq','catagories','brand_master','catagories2','id','project_id'));
    }
    public function update(Request $request)
    {
        // dd($request);

        if( $request->btn_send == "btn_send" )
        {
            $send_form = "1";
        }else
        {
            $send_form = "0";
        }

        template_boqs::where('id', $request->id)->update([
            'status' => $send_form
        ]);

        Boq::where('template_boq_id', $request->id)->delete();      //*******************ลบข้อมูลเดิมมออกก่อน แล้วค่อยเพิ่มใหม่************************

        foreach($request->main_id as $key => $value)
        {
            // return $request->code_id[2];
            if(!empty($request->code_id[$key]))
            {
                foreach($request->code_id[$key] as $key2 => $value2)
                {
                    if( $value2 )
                    {
                        $boq = new Boq;
                        $boq->template_boq_id = $request->id;
                        $boq->main_id = ($key2);
                        $boq->sub_id = ($value2);
                        $boq->amount = ($request->amount[$key][$key2]);
                        $boq->unit_id = ($request->unit_id[$key][$key2]);
                        $boq->desc = ($request->desc[$key][$key2]);
                        $boq->total = $request->total;
                        $boq->status = $send_form;
                        $boq->comment = $request->comment;
                        $boq->create_by = 1;
                        $boq->update_by = 1;
                        $boq->save();
                    }
                }
            }
        }
        return redirect(route('allBoq', ['id' => $request->project_id]))->with('success', '!!! Edit BOQ Complete !!!');
    }

    public function change_status_boq(Request $request)
    {
        // dd($request);
        template_boqs::where('id', $request->boq_id)->update([
            'status' => "1"

        ]);

        return back()->with('Yay');

    }

    public function export()
    {
        return Excel::download(new BoqsExport, 'Project.xlsx');
    }


}
