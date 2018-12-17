@extends('layouts.app')
@section('section')
    <h1>Update Post</h1>
    {!! Form::open(['action' =>'PostsController@update', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $posts->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $posts->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
