@extends('layouts.app')
@section('section')
        <h1>Post</h1>
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class="well">
                    <h1><a href="\posts\{{$post->id}}">{{$post->title}}</a></h1>
                    <small>Last update: {{$post->updated_at}}</small>
                    <p>{{$post->body}}</p>
                </div>
            @endforeach
            {{$posts->links()}}
        @else
            <p>No posts found</p>
        @endif

        <a href="/posts/create"><div class="btn">Create Post</div></a>
@endsection
