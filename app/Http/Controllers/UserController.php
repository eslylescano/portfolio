<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Country;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::id());
        $countries = Country::all();

        
        //return view('backend.pages.about_me')->with('user',$user);
        return view('admin.user.index',compact('user','countries'));
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
        //
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
        
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'photo' => 'image|nullable|max:1999'
        ]);

        //Handle File Upload
        if($request->hasFile('photo')){
            //get filename with extension
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            //get filename without extension
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get extension
            $extension = $request->file('photo')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('photo')->storeAs('public/photos',$fileNameToStore);
        }else{
            $fileNameToStore='noimage.jpg';
        }

        //finding the user
        $user = User::find($id);
        $user->name=$request->input('name');
        $user->surname=$request->input('surname');
        $user->address=$request->input('address');
        $user->phone=$request->input('phone');
        $user->facebook=$request->input('facebook');
        $user->twitter=$request->input('twitter');
        $user->youtube=$request->input('youtube');
        $user->city=$request->input('city');
        $user->country_id=$request->input('country_id');

        if($request->hasFile('photo')){
        
        if($user->photo !='noimage.jpg'){
        Storage::delete('public/photos/'.$user->photo);
        }
        $user->photo = $fileNameToStore;
        
        }

        $user->save();

        return redirect('admin/user')->with('success','User Updated');

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
    }
}
