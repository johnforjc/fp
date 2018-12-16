@extends('layout.app')
@section('section')
        <h1>Post</h1>
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class="well">
                    <h1>{{$post->title}}</h1>
                    <small>Last update: {{$post->updated_at}}</small>
                    <p>{{$post->body}}</p>
                </div>
            @endforeach
            {{$posts->links()}}
        @else
            <p>No posts found</p>
        @endif
@endsection
