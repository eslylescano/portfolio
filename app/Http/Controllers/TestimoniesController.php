<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Testimony;

class TestimoniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonies = User::find(Auth::id())->testimonies;
        return view('admin.testimonies.index',compact('testimonies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => 'required',
            'comment' => 'required',
        ]);
/*
            $table->integer('user_id');
            $table->integer('state');
            $table->string('ip');
            $table->string('name');
            $table->string('comment');
            $table->string('date');
            */
        $testimony = new Testimony;
        $testimony->user_id = $request->user_id;
        $testimony->state = 2;
        $testimony->ip = $request->ip;
        $testimony->name = $request->name;
        $testimony->comment = $request->comment;
        $testimony->date = $request->date;
        $testimony->save();
        return redirect('/')->with('success','Testimony Created, waiting to accepted');;

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
        $testimony =  Testimony::find($id);
               return view('admin.testimonies.edit',compact('testimony'));
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
            'state' => 'required',
        ]);

        $testimony = Testimony::find($id);
        $testimony->state = $request->state;
        $testimony->save();
        return redirect('admin/testimonies')->with('success','Testimony Updated');
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
        $testimony = Testimony::find($id);
        $testimony->delete();
        return redirect('admin/testimonies')->with('success','Testimony Deleted');
    }
}
