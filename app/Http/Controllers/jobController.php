<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job as jobModel;
use DB;



class jobController extends Controller
{
    public function index()
    {
        $jobs = jobModel::all();

        return view('admin.jobs.job', compact('jobs'));

    }

    public function add(Request $request)
    {
        $jobs = new  jobModel();



        if ($request->ajax()) {

            $jobs->name=$request->input('job');
            $jobs->detials=$request->input('details');
            $jobs->numVecance=$request->input('numbers');
            $jobs->save();


        }

return'done';

    }
}
