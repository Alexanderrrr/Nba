<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <p>{{ auth()->user()->name }}</p>
      <h1>You got new comment: {{ $comment->content }}</h1>
      <p>at: {{ $comment->created_at }}</p>
  </body>
</html>
