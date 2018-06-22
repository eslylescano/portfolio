<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;


class FrontEndController extends Controller
{
     public function index()
    {
        $user = User::all()->first();
        return view('frontend.index',compact('user'));
    }

    
}
