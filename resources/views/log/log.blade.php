@extends('layouts.app')

@section('section')
    <table class="table table-striped">
        <tr>
            <th>Kode Soal</th>
            <th>Nilai</th>
        </tr>
        @foreach($user as $soal)
        <tr>
            <th>{{$soal->Kode_Soal}}</th>
            <th>{{$soal->score}}</th>
        </tr>    
        @endforeach
    </table>
@endsection