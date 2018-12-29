@extends('layouts.app')

@section('content')

    <h1>Posts</h1>
        @if(count($posts) > 1)
            @foreach($posts as $post)
                <ul class="list-group">
                    <li class="list-group-item"><h3><a href="posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </li><br>
            @endforeach
                </ul>
           {{$posts->links()}}
        @else
            <p>No posts found</p>
        @endif
    
    @endsection