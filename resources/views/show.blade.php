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
@endsection
