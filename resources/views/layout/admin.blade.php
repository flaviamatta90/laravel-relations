<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset("/css/app.css")}}">
    <title>Admin</title>
  </head>
  <body>
    <header>
      @include("Partials.header")
    </header>
    <main>
      @yield("main-content")
    </main>
    <footer>
      @include("Partials.footer")
    </footer>
  </body>
</html>