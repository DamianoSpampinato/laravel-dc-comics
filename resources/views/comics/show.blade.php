@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>{{$comic->title}}</h1>
        <div>
            <img src="{{$comic->thumb}}" alt="incona-fumetto">
            <div>descrizione {{$comic->description}}</div>
            <div>serie {{$comic->series}}</div>
            <div>Data di vendita {{$comic->sale_date}}</div>
            <div>tipologia {{$comic->type}}</div>
            <div>prezzo {{$comic->price}}</div>

        </div>
    </div>
@endsection