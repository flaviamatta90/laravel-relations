@extends('layout.main')

@section('page-content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-4">
                    <div class="card">
                        <img class="card-img-top" src="{{$comic->cover}}" alt="{{$comic->title}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$comic->title}}</h5>
                        @if ($comic->author)
                            <h6>Autore: {{$comic->author->name}}{{$comic->author->lastname}}</h6>
                        @endif
                            <a href="{{route("comics.show", $comic->id)}}" class="btn btn-primary">Scopri di più</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection