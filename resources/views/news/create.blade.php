@extends('master')

@section('title')
    Create news
@endsection

@section('content')

      <form class="form-signin" method="POST" action="/create/news">

        {{ csrf_field() }}

        <h1 class="h3 mb-3 font-weight-normal">Create news</h1>
        <label>Title</label>
        <input type="text" name="title" class="form-control" placeholder="enter title">



        <label>Enter News Text</label>
        <textarea name="content" rows="8" cols="80" class="form-control" placeholder="Enter News Here"></textarea>
        <div class="form-group">
            <label>Select teams</label><br/>

            @foreach($teams as $team)
            {{ $team->name }} <input type="checkbox" name="teams[]" value="{{  $team->id  }}"><br/>
            @endforeach
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Publish</button>
      </form>

@endsection
