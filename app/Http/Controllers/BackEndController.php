<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class BackEndController extends Controller
{
     public function index()
    {
        return view('backend.index');
    }



    public function about_me()
    {
        
        $user = User::find(Auth::id());

        
        return view('backend.pages.about_me')->with('user',$user);
    }

    public function abilities()
    {
        return view('backend.pages.abilities');
    }

    public function experience()
    {
        return view('backend.pages.experience');
    }

     public function studies()
    {
        return view('backend.pages.studies');
    }

    public function testimonies()
    {
        return view('backend.pages.testimonies');
    }
}
