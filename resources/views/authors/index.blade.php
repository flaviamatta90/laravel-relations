@extends('layout.main')

@section('page-content')
    <div class="container">
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Cognome</th>
                <th scope="col">Data di nascita</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($authors as $author)
            <tr>
                <td>{{$author->name}}</td>
                <td>{{$author->lastname}}</td>
                <td>{{$author->date_of_birth}}</td>
            @endforeach
    </div>
@endsection