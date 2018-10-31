@extends('master')

@section('title')
  Single Team Info
@endsection

@section('content')
    <h1>{{ $team->name }}</h1>
    <p>{{ $team->email }}</p>
    <p>{{ $team->address }}</p>
    <p>{{ $team->city }}</p>

    <h1>Players of this team</h1>
      @foreach($team->players as $player)
        <h1><a href="/nba/players/{{$player->id}}">{{ $player->last_name }}</a></h1>
      @endforeach
      <ul>
        <ul>
          @foreach($team->comments as $comments)
          <li>{{ $comments->content }}</li>
          @endforeach
        </ul>
      </ul>
      <h4>Post a Comment</h4>
      <h1>{{ auth()->user()->id }}</h1>
      <form method="POST" action="/nba/comment/{{$team->id}}">

        @csrf

        <div class="form-group">
          <label>Text</label>
          <textarea name="content"class="form-control" placeholder="Enter comment" rows="5" cols="20"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection
