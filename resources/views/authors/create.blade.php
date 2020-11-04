@extends('layout.main')

@section('page-content')

    <div class="container">
        <h1>Crea un autore</h1>
        <form action="{{route("authors.store")}}" method="POST">
            @csrf
            @method("POST")
            <div class="form-group">
              <label for="name">Name</label>
            <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nome Autore" value="{{old("name")}}">
              @error('name')
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