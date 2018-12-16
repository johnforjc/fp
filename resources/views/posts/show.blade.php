@extends('layout.app')
@section('section')
    <div class="card-title">
        <h3>
            {{$posts->title}}
        </h3>
        <small>
            Last update: {{$posts->updated_at}}
        </small>
    </div>
    <div class="posts-content">
        <p>
            {{$posts->body}}
        </p>
    </div>
@endsection
