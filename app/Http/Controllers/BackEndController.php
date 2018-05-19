<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackEndController extends Controller
{
     public function index()
    {
        return view('backend.index');
    }



    public function about_me()
    {
        return view('backend.pages.about_me');
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
