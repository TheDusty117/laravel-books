@extends('layouts.app')

@section('content')

<div class="container">

    <h1>ciao sono INDEX</h1>

    <a class="btn btn-primary" href="{{ route('books.create') }}">
        Aggiungi nuovo libro
    </a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Autore</th>
                <th scope="col">Genere</th>
                <th scope="col">N.Copie</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Bottoni</th>


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

            {{-- autori many to many --}}
            <td>
                @forelse ($book->authors as $author)
                    <span class="badge rounded-pill text-bg-light">
                        {{ $author->name }}
                    </span>
                @empty
                        -
                @endforelse
            </td>

            <td>

                @forelse ($book->genre()->get() as $genre)
                    <span class="badge rounded-pill text-bg-warning">
                        {{ $genre->name }}
                    </span>
                @empty
                    -
                @endforelse

            </td>

            <td>{{ $book->numero_copie }}</td>
            <td>{{ $book->descrizione }}</td>
            <td>
                <a class="btn btn-sm btn-secondary" href="{{ route('books.edit',$book)}}">Modifica</a>
                <form action="{{ route('books.destroy',$book) }}" method="POST">

                    @csrf
                    @method('DELETE')

                    <input type="submit" class="btn btn-danger btn-sm" value="Elimina">

                </form>
            </td>

          </tr>
    @empty
    @endforelse
        </tbody>
      </table>

</div>



@endsection
