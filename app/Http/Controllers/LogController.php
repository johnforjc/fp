<?php

namespace TestCentreGym\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use TestCentreGym\Log;
use TestCentreGym\User;
use TestCentreGym\Soal;
use DB;


class LogController extends Controller
{
    public function __contruct(){
        $this->middleware('auth');
    }

    public function index(){
        $id = auth()->user('id');
        $soal = Log::find($id);
        return view('log.log')->with('user',$soal);
    }

    public function store(Request $request){
        $this->validate($request, [
            'id' => 'required',
            'score' => 'required'
        ]);

        $log = new Log;
        $log->id=$request->input('id');
        $log->email=$request->input('email');
        $log->score=$request->input('score');
        $log->Kode_Soal=$request->input('Kode_Soal');
        $log->save();

        return redirect('/log');
    }
}
