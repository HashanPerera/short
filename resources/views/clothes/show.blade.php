@extends('layouts.app')

@section('content')

    <h1>{{$post->title}}</h1>
    
    <div>
        {!!$post->body!!}
    </div>
    <hr>  
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
    <a href="{{asset('posts')}}" class="btn btn-default">Go Back</a>

    {!!Form::open(['action' =>['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{form::hidden('_method', 'DELETE')}}
        {{form::submit('Delete', ['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
    @endsection