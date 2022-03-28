<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Apply;


class FlutterJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jobs = Job::all();
        return response()->json(["data" =>  $jobs, "Message" => "Success"]);
        // return response()->json($jobs, 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Create a job application
        $job = new Job();
//         $app->validate([
//             'user_id' => 'required',
//             'job_id' => 'required'
//         ]);
        $job->JobName=$request->JobName;
        $job->Description=$request->Description;
        $job->save();
        return response()->json(201);
    }

}
