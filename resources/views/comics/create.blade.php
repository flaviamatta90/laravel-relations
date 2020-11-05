@extends('layout.main')

@section('page-content')

    <div class="container">
        <h1>Crea un fumetto</h1>
        <form action="{{route("comics.store")}}" method="POST">
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
              <label for="number">Numero Fumetto</label>
              <input type="number" class="form-control @error('number') is-invalid @enderror" id="number" placeholder="Numero fumetto" value="{{old("number")}}">
              @error('number')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
            </div>

            <div class="form-group">
                <label for="n_pages">Numero Pagine</label>
                <input type="number" class="form-control @error('n_pages') is-invalid @enderror" id="n_pages" placeholder="Numero Pagine" value="{{old("n_pages")}}">
                @error('n_pages')
                      <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
              </div>

              <div class="form-group">
                <label for="edition">Edizione</label>
                <input type="text" class="form-control @error('edition') is-invalid @enderror" id="edition" placeholder="Edizione" value="{{old("edition")}}">
                @error('edition')
                      <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
              </div>

              <div class="form-group">
                  <label for="reading">Verso di lettura </label>

                  <select class="form-control @error('reading') is-invalid @enderror" id="reading" name="reading">
                    <option value="ltr" selected>Left to Right</option>
                    <option value="rtl">Right to Left</option>
                  </select>

                  @error('reading')
                      <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
              </div>

              <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Prezzo" value="{{old("price")}}">

                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
            </div>

            <div class="form-group">
                <label for="color">Colore</label>
                <input type="checkbox"  name="color" id="color" value="1">

                @error('color')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
            </div>

            <div class="form-group">
                <label for="release">Anno</label>

                <select class="form-control @error('release') is-invalid @enderror" id="release">

                    @for($i = date("Y"); $i >= 1920; $i--)
                        <option value={{$i}}>{{$i}}</option>
                    @endfor

                </select>

                @error('release')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
            </div>

            <div class="form-group">
                <label for="cover">Immagine di Copertina</label>
                <input type="cover" class="form-control @error('cover') is-invalid @enderror" id="cover" placeholder="Inserisci la URL Cover del fumetto" value="{{old("cover")}}">

                @error('cover')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
            </div>

            <div class="form-group">
                <label for="autor_id">Autore</label>

                <select class="form-control @error('autor_id') is-invalid @enderror" id="autor_id" name="autor_id">
                  @foreach ($authors as $author)
                    <option value="{{$author->id}}">{{ $author->name }} {{ $author->laastname }}</option>
                  @endforeach
                </select>

                @error('autor_id')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
            </div>

            <div class="form-group">
                <h3>Genere di Fumetto</h3>
                <ul>
                    @foreach ($genres as $genre)
                        <label for={{$genre->id}}>{{ $genre->name }}</label>
                        <input type="checkbox" name="genres[]" id="{{$genre->id}}" value="{{$genre->id}}">
                    @endforeach
                </ul>

                @error('genres')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection