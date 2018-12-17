@extends('layout.app')
@section('section')
       <h1>Create Soal</h1>
        {!! Form::open(['action' => ['SoalsController@update', $soal->id ], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('Kode_Soal', 'Kode_Soal')}}
                {{Form::text('Kode_Soal', $soal->Kode_Soal, ['class' => 'form-control', 'placeholder' =>'Contoh : F1,K1,M1,B1'])}}
            </div>
            <div class="form-group">
                {{Form::label('soal', 'soal')}}
                {{Form::textarea('soal', $soal->soal, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' =>''])}}
            </div>
            <div class="form-group">
                {{Form::label('A', 'A')}}
                {{Form::text('A', $soal->A, ['class' => 'form-control', 'placeholder' =>''])}}
            </div>
            <div class="form-group">
                {{Form::label('B', 'B')}}
                {{Form::text('B', $soal->B, ['class' => 'form-control', 'placeholder' =>''])}}
            </div>
            <div class="form-group">
                {{Form::label('C', 'C')}}
                {{Form::text('C', $soal->C, ['class' => 'form-control', 'placeholder' =>''])}}
            </div>
            <div class="form-group">
                {{Form::label('D', 'D')}}
                {{Form::text('D', $soal->D, ['class' => 'form-control', 'placeholder' =>''])}}
            </div>
            <div class="form-group">
                {{Form::label('E', 'E')}}
                {{Form::text('E', $soal->E, ['class' => 'form-control', 'placeholder' =>''])}}
            </div>
            <div class="form-group">
                {{Form::label('jawaban', 'jawaban')}}
                {{Form::text('jawaban', $soal->jawaban, ['class' => 'form-control', 'placeholder' =>'Contoh : A, B, C, D, E'])}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
@endsection