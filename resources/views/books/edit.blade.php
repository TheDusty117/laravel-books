@extends('layouts.app')

@section('content')

<div class="container">
    <h1>ciao sono EDIT</h1>


    <form action="{{ route('books.update',$book) }}" method="POST">

        @csrf

        @method('PUT')

        <div class="mb-3">
          <label for="titolo" class="form-label">Titolo</label>
          <input type="text" class="form-control" id="titolo" name="titolo" value="{{old('titolo',$book->titolo)}}">
        </div>

        <div class="mb-3">
            <label for="autore" class="form-label">Autore</label>
            <input type="text" class="form-control" id="autore" name="autore" value="{{old('autore',$book->autore)}}">
          </div>

          <div class="mb-3">
            <label for="genere" class="form-label">Genere</label>
            <input type="text" class="form-control" id="genere" name="genere" value="{{old('genere',$book->genere)}}">
          </div>

          <div class="mb-3">
            <label for="numero_copie" class="form-label">Numero Copie</label>
            <input type="number" class="form-control" id="numero_copie" name="numero_copie" value="{{old('numero_copie',$book->numero_copie)}}">
          </div>

          <div class="mb-3">
            <label for="descrizione" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control" id="descrizione" name="descrizione" cols="30" rows="10" >
                    {{old('descrizione',$book->descrizione)}}
                </textarea>
          </div>

          <button type="submit" class="btn btn-secondary">Modifica</button>


      </form>

        @if ($errors->any())

            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif

</div>


@endsection
