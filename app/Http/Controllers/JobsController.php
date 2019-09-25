<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Experience;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = User::find(Auth::id())->jobs;

        return view('admin.jobs.index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
               return view('admin.jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'name' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'description'=>'required'
        ]);

        $job = new Experience;
        $job->type = 1;
        $job->user_id = Auth::id();
        $job->title = $request->title;
        $job->name = $request->name;
        $job->from_date = $request->from_date;
        $job->to_date = $request->to_date;
        $job->description = $request->description;
        $job->save();
        return redirect('admin/jobs')->with('success','Job Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        //
        $job =  Experience::find($id);
               return view('admin.jobs.edit',compact('job'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'title' => 'required',
            'name' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'description'=>'required'
        ]);

        $job = Experience::find($id);
        $job->title = $request->title;
        $job->name = $request->name;
        $job->from_date = $request->from_date;
        $job->to_date = $request->to_date;
        $job->description = $request->description;
        $job->save();
        return redirect('admin/jobs')->with('success','Job Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $job = Experience::find($id);
        $job->delete();
        return redirect('admin/jobs')->with('success','Job Deleted');
    }
}
