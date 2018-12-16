@extends('layout.app')
@section('welcomepage')
       <h1>Create Soal</h1>
        {!! Form::open(['action' => 'SoalsController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('soal', 'soal')}}
                {{Form::text('soal', '', ['class' => 'form-control', 'placeholder' =>'soal'])}}
            </div>
        {!! Form::close() !!}
@endsection