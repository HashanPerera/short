@extends('layouts.app1')

@section('content')

<h1>Create Posts</h1>

    {!! Form::open(['action' =>'PostsController@store', 'method' => 'POST']) !!}   
<div class="form-group">
    {{form::label('title', 'Title')}}
    {{form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
</div>
<div class="form-group">
     {{form::label('body', 'Body')}}
    {{form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
</div>

{{form::submit('submit', ['class'=>'btn btn-primary'])}}
{!! form::close() !!}

@endsection