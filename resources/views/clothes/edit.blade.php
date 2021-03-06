@extends('layouts.app1')

@section('content')

<h1>Edit Posts</h1>

    {!! Form::open(['action' => ['PostsController@update', $post->id] ,'method' => 'POST']) !!}   
<div class="form-group">
    {{form::label('title', 'Title')}}
    {{form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
</div>
<div class="form-group">
     {{form::label('body', 'Body')}}
    {{form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
</div>
{{form::hidden('_method', 'PUT')}}
{{form::submit('submit', ['class'=>'btn btn-primary'])}}
{!! form::close() !!}

@endsection