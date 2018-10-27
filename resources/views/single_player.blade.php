@extends('master')

@section('title')
  Single Player Info
@endsection

@section('content')
    <ul>
      <li>{{$player->first_name}}</li>
      <li>{{$player->last_name}}</li>
      <li>{{$player->email}}</li>
      <li><a href="/nba/teams/{{$player->team->id}}">{{$player->team->name}}</a></li>


    </ul>
@endsection
