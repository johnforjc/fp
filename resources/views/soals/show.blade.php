@extends('layout.app')
@section('section')
        <h1>{{$soal->Kode_Soal}}</h1>
        <p>{{$soal->soal}}</p>
        <ol type="A" start="A">
            <li>{{$soal->A}}</li>
            <li>{{$soal->B}}</li>
            <li>{{$soal->C}}</li>
            <li>{{$soal->D}}</li>
            <li>{{$soal->E}}</li>
        </ol>
        <p> Jawaban : {{$soal->jawaban}}</p>
    
        <small>Written on {{$soal->created_at}}</small>
        <hr>

        <a href ="/soals/{{$soal->id}}/edit" class="btn btn-primary">Edit Soal</a>
        {!!Form::open(['action'=> ['SoalsController@destroy', $soal->id], 'method' => 'POST', 'class'=>'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
@endsection