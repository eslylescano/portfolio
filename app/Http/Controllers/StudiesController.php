<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Country;
use App\Experience;

class StudiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studies = User::find(Auth::id())->studies;

        return view('admin.studies.index',compact('studies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           return view('admin.studies.create');
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

        $study = new Experience;
        $study->type = 2;
        $study->user_id = Auth::id();
        $study->title = $request->title;
        $study->name = $request->name;
        $study->from_date = $request->from_date;
        $study->to_date = $request->to_date;
        $study->description = $request->description;
        $study->save();
        return redirect('admin/studies')->with('success','Study Created');
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
        $study =  Experience::find($id);
               return view('admin.studies.edit',compact('study'));
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

        $study = Experience::find($id);
        $study->title = $request->title;
        $study->name = $request->name;
        $study->from_date = $request->from_date;
        $study->to_date = $request->to_date;
        $study->description = $request->description;
        $study->save();
        return redirect('admin/studies')->with('success','Study Updated');
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
        $study = Experience::find($id);
        $study->delete();
        return redirect('admin/studies')->with('success','Study Deleted');
    }
}
