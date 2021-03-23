
@extends('layouts.app')
@section('content')

<div
      class="p-5  bg-image"
      style=" background-image: url('/storage/cover_images/imagehome4.jpg');
        height: 600px;
      "
>
  <h1 class="text-center"><b>Create Post</b></h1>
  {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store','method' => 'POST','enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
      {{Form::label('title','Title')}}
      {{Form::text('title','',['class' => 'form-control','placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
      {{Form::label('body','Body')}}
      {{Form::textarea('body','',['class' => 'form-control','placeholder' => 'Body'])}}
    </div>
    <div class="form-group">
      {{Form::file('cover_image')}}
    </div>
    {{Form::submit('submit',['class' => 'btn btn-success'])}}

  {!! Form::close() !!}

</div>

@endsection
