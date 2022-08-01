<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function admin($role){
        return view('auth.login',['role'=>$role]);
    }
    
    public function entity($role){
        return view('auth.login',['role'=>$role]);
    }
}
