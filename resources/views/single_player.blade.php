<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      <li>{{$player->first_name}}</li>
      <li>{{$player->last_name}}</li>
      <li>{{$player->email}}</li>
      <li><a href="/teams/{{$player->team->id}}">{{$player->team->name}}</a></li>


    </ul>
  </body>
</html>
