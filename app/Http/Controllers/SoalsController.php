<?php

namespace TestCentreGym\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use TestCentreGym\Soal;
use DB;

class SoalsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soals = Soal::paginate(10);
        return view('soals.index')->with('soals', $soals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('soals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'Kode_Soal' => 'required',
            'jawaban' => 'required',
        ]);

        $soal = new Soal;
        $soal->Kode_Soal = $request->input('Kode_Soal');
        $soal->soal = $request->input('soal');
        $soal->A = $request->input('A');
        $soal->B = $request->input('B');
        $soal->C = $request->input('C');
        $soal->D = $request->input('D');
        $soal->E = $request->input('E');
        $soal->jawaban = $request->input('jawaban');
        $soal->save();

        return redirect('/soals')->with('success', 'Soal Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {
        $soal = Soal::find($id);
        return view('soals.show')->with('soal', $soal);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $soal = Soal::find($id);
        return view('soals.edit')->with('soal', $soal);
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
        $this->validate($request, [
            'Kode_Soal' => 'required',
            'jawaban' => 'required',
        ]);

        $soal = Soal::find($id);
        $soal->Kode_Soal = $request->input('Kode_Soal');
        $soal->soal = $request->input('soal');
        $soal->A = $request->input('A');
        $soal->B = $request->input('B');
        $soal->C = $request->input('C');
        $soal->D = $request->input('D');
        $soal->E = $request->input('E');
        $soal->jawaban = $request->input('jawaban');
        $soal->save();

        return redirect('/soals')->with('success', 'Soal Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $soal = Soal::find($id);
        $soal->delete();
        return redirect('/soals')->with('success', 'Soal Removed');
    }
}
