@extends('master')

@section('title')
    Nba Teams
@endsection

@section('content')
  @foreach($teams as $team)
    <h1><a href="/nba/teams/{{ $team->id }}">{{ $team->name }}</a></h1>

  @endforeach
@endsection
