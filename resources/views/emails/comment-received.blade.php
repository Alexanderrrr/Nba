<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <h1>Comment for Team {{ $comment->team->name }}</h1>
      <p>To: {{ auth()->user()->name }}</p>
      <h1>comment: {{ $comment->content }}</h1>
      <p>created at: {{ $comment->created_at }}</p>
  </body>
</html>
