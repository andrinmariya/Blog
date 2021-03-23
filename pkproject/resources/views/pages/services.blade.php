
@extends('layouts.app')

@section('content')

  <div
      class="p-5 text-center bg-image"
      style=" background-image: url('/storage/cover_images/imagehome4.jpg');
        height: 600px;
      "
    >

      <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white">
            <br/>
            <br/>
            <h1 class="mb-3">{{$title}}</h1>
            <br/>
            <h5 class="mb-3">
              @if(count($services)>0)
                <ul>
                  @foreach($services as $service)
                    <li>{{$service}}</li>
                  @endforeach
                </ul>

              @endif


            </h5>

          </div>
        </div>
      </div>
    </div>


</div>

@endsection
