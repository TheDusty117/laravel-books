@extends('layouts.app')

@section('content')

<h1>ciao sono INDEX</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Titolo</th>
            <th scope="col">Autore</th>
            <th scope="col">Genere</th>
            <th scope="col">N.Copie</th>
            <th scope="col">Descrizione</th>

        </tr>
    </thead>
    <tbody>
@forelse ($books as $book)
        <tr>
            <th scope="row">{{ $book->id }}</th>
        <td>
            <a href="{{ route('books.show',$book) }}">
            {{ $book->titolo }}
            </a>
        </td>
        <td>{{ $book->autore }}</td>
        <td>{{ $book->genere }}</td>
        <td>{{ $book->numero_copie }}</td>
        <td>{{ $book->descrizione }}</td>

      </tr>
@empty
@endforelse
    </tbody>
  </table>


@endsection
