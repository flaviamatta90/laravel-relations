<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Comics</title>
</head>
<body>
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="{{$comic->cover}}" alt="{{$comic->title}}">
                    <div class="card-body">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <a href="{{route("comics.show", $comic->id)}}" class="btn btn-primary">Scopri di più</a>
                    </div>
                </div>
            </div>
           @endforeach
        </div>
    </div>

</body>
</html>