<?php

namespace TestCentreGym\Http\Controllers;

use Illuminate\Http\Request;
use TestCentreGym\Log;
use TestCentreGym\User;
use TestCentreGym\Soal;
class LogController extends Controller
{ 
    public function index(){
        $id = auth()->user('id');
        $soal = Log::find($id);
        return view('log.log')->with('user',$soal);
    }
}
