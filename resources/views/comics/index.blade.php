@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-4">
                <div class="card">
                    <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$comic['title']}}</h5>
                      <p class="card-text">{{$comic['description']}}</p>
                      <p class="card-text">{{$comic['type']}}</p>
                      <p class="card-text">{{$comic['series']}}</p>
                      <a href="{{route('comics.edit', ['comic'=>$comic->id])}}" class="btn btn-primary">modificalo</a>
                      <form action="{{route('comics.destroy', ['comic'=>$comic->id])}}" method="POST">
                        @method('DELETE')
                        @csrf

                        <button class="btn btn-danger"type="submit">eliminalo</button>
                      </form>
                    </div>
                  </div>
                </div>
                @endforeach
        </div>
    </div>    
@endsection