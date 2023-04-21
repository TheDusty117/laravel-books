@extends('layouts.app')

@section('content')

<div class="container">
    <h1>ciao sono CREATE</h1>

    <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Titolo</label>
          <input type="text" class="form-control" id="exampleInputEmail1">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Autore</label>
            <input type="text" class="form-control" id="exampleInputEmail1">
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Genere</label>
            <input type="text" class="form-control" id="exampleInputEmail1">
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Numero Copie</label>
            <input type="number" class="form-control" id="exampleInputEmail1">
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control" id="description" name="description" cols="30" rows="10" ></textarea>
          </div>

        <a href="">

        </a>

      </form>

</div>


@endsection
