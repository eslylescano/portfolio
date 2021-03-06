<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Ability;

class AbilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abilities = User::find(Auth::id())->abilities;
        return view('admin.abilities.index',compact('abilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
               return view('admin.abilities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'name' => 'required',
            'domain' => 'required',
        ]);

        $ability = new Ability;
        $ability->user_id = Auth::id();
        $ability->name = $request->name;
        $ability->domain = $request->domain;;
        $ability->save();
        return redirect('admin/abilities')->with('success','Ability Created');
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
        $ability =  Ability::find($id);
               return view('admin.abilities.edit',compact('ability'));
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
            'name' => 'required',
            'domain' => 'required',

        ]);

        $ability = Ability::find($id);
        $ability->name = $request->name;
        $ability->domain = $request->domain;
        $ability->save();
        return redirect('admin/abilities')->with('success','Ability Updated');
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
        $ability = Ability::find($id);
        $ability->delete();
        return redirect('admin/abilities')->with('success','Ability Deleted');
    }
}
