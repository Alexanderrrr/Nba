@extends('master')
@section('title')
  Deatiled news info
@endsection

@section('content')
    <ul>
      <li>Created At {{ $news->user->created_at }}</li>
      <li>By {{ $news->user->name }}</li>
      <li>Contact email {{ $news->user->email }}</li>
      <br/>
      <ul>
        <li><strong>{{ $news->content }}</strong></li>
      </ul>
    </ul>

   <h1>These news are related to teams:</h1>
   @foreach($news->team as $team)
       <li>{{$team->name}}</li>
   @endforeach
@endsection
