@extends('layouts.app');

@section('content')
    <div class="container">
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <div >
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                    <label for="title">Inserisci titolo</label>
                    <input type="text" id="title" name="title">

                
                    <label for="description">Inserisci descrizione</label>
                    <input type="text" id="description" name="description">
                
                    <label for="price">Inserisci prezzo</label>
                    <input type="number" id="price" name="price">
                    <label for="thumb">Inserisci url img</label>
                    <input type="text" id="thumb" name="thumb">
                    <label for="series">Inserisci series</label>
                    <input type="text" id="series" name="series">
                    <label for="sale_date">Inserisci data del sale</label>
                    <input type="date" id="sale_date" name="sale_date">
                    <select name="type" id="type">
                        <option value="comic book">Comic Book</option>
                        <option value="graphic novel">Graphic Novel</option>
                    </select>

            </div>
            <button type="submit">Invia</button>
        </form>    
    </div>    
@endsection