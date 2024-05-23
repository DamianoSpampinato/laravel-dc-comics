@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col">
                <div class="card">
                    <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$comic['title']}}</h5>
                      <p class="card-text">{{$comic['description']}}</p>
                      <p class="card-text">{{$comic['type']}}</p>
                      <p class="card-text">{{$comic['series']}}</p>
                    </div>
                  </div>
                </div>
                @endforeach
        </div>
    </div>    
@endsection