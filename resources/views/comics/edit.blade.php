@extends('layouts.app');

@section('content')
    <div class="container">
        <form action="{{route('comics.update', ["comic"=>$comic->id])}}" method="POST">
            @csrf
            @method('PUT')
            <div >
                
                    <label for="title">Inserisci titolo</label>
                    <input value="{{$comic->title}}" type="text" id="title" name="title">

                
                    <label for="description">Inserisci descrizione</label>
                    <input value="{{$comic->description}}" type="text" id="description" name="description">
                
                    <label for="price">Inserisci prezzo</label>
                    <input type="number" id="price" name="price" value="{{$comic->price}}">
                    <label for="thumb">Inserisci url img</label>
                    <input type="text" id="thumb" name="thumb" value="{{$comic->thumb}}">
                    <label for="series">Inserisci series</label>
                    <input type="text" id="series" name="series" value="{{$comic->series}}">
                    <label for="sale_date">Inserisci data del sale</label>
                    <input type="date" id="sale_date" value="{{$comic->sale_date}}" name="sale_date">
                    <select name="type" id="type">
                        <option {{$comic->type === 'comic book' ? 'selected':''}}value="comic book">Comic Book</option>
                        <option {{$comic->type === 'comic graphic novel' ? 'selected':''}}value="graphic novel">Graphic Novel</option>
                    </select>

            </div>
            <button type="submit">Invia</button>
        </form>    
    </div>    
@endsection