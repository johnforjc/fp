<?php

namespace TestCentreGym\Http\Controllers;

use Illuminate\Http\Request;
use TestCentreGym\Log;
use TestCentreGym\User;
class LogController extends Controller
{ 
    public function index(){
        $id = auth()->user('id');
        $user = User::find($id);
        return view('log.log')->with('log',$user);
    }
}
