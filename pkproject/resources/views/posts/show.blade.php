@extends('layouts.app')
@section('content')
  <h1>{{$post->title}}</h1>
  <div class="row">
      <div class="col-md-12">
          <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
      </div>
    
  </div>
  <p>{{$post->body}}</p>
  <hr>
  <small>Written On {{$post->created_at}}</small>
</br>
<hr>
</br>
</br>
  <a href="/posts" class="btn btn-primary">Back</a>

  @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)

      <a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a>
      </br>
      </br>

      {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy',$post->id],'method' => 'POST','class'=>'pull-right']) !!}

      {{Form::hidden('_method','DELETE')}}
      {{Form::submit('Delete',['class' => 'btn btn-danger'])}}

      {!! Form::close() !!}

    @endif

 @endif

@endsection
