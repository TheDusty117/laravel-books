@extends('layouts.app')

@section('content')


<div class="container">

    <h1>Ecco il tuo libro!</h1>

    <div class="py-4">
        <h2> {{$book->titolo}} </h2>
        <h3> {{$book->autore}} </h3>
        <h3> {{$book->genre}} </h3>
        <h4> {{$book->numero_copie}} </h4>
        <p>{{ $book->descrizione }}</p>
    </div>

    <a class="btn btn-primary" href="{{route('books.index')}}">torna ad index</a>

</div>

@endsection
