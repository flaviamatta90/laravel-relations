@extends('layout.main')

@section('page-content')

    <div class="container">
        <h1>Crea un fumetto</h1>
        <form action="{{route("authors.store")}}" method="POST">
            @csrf
            @method("POST")
            
            <div class="form-group">
              <label for="title">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Titolo" value="{{old("title")}}">
              @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
                <label for="original_title">Titolo Originale</label>
              <input type="text" class="form-control @error('original_title') is-invalid @enderror" id="original_title" name="original_title" placeholder="Titolo originale" value="{{old("original_title")}}">
                @error('original_title')
                      <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

            <div class="form-group">
              <label for="lastname">Last Name</label>
              <input type="lastname" class="form-control error('lastname') is-invalid @enderror" id="lastname" placeholder="Cognome Autore" value="{{old("lastname")}}">
              @error('lastname')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
            </div>

            <div class="form-group">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" class="form-control error('date_of_birth') is-invalid @enderror" id="date_of_birth" placeholder="Data di nascita Autore" value="{{old("date_of_birth")}}">
                @error('date_of_birth')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection