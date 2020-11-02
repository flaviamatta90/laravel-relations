<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
</head>
<body>
   @foreach ($comics as $comic)
       <div>
            <h2>{{$comic->title}}</h2>
            <img src="{{$comic->cover}}" alt="{{$comic->cover}}">
            <p>{{$comic->price}}</p>
            <p>{{$comic->year}}</p>
       </div>
   @endforeach
</body>
</html>