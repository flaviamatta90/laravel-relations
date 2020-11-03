<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="row">
            
        </div>
    </div>
    <script id="entry-template" type="text/x-handlebars-template">
        <div class="entry">
          <h1>{{title}}</h1>
          <div class="body">
            {{body}}
          </div>
        </div>
      </script>


    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>