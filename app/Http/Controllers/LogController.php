<?php

namespace TestCentreGym\Http\Controllers;

use Illuminate\Http\Request;

class LogController extends Controller
{ 
    public function index(){
        $id = auth()->user()->id;
        $user = User::find($id);
        return view('log')->with('user',$user );
    }
}
