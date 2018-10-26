<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  @foreach($teams as $team)
    <h1><a href="/teams/{{ $team->id }}">{{ $team->name }}</a></h1>
  @endforeach
  </body>
</html>
