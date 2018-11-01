@extends('master')
 @section('title')
    News
 @endsection

@section('content')
    {{ $newses->links() }}

    <ul>
      @foreach($newses as $news)
          <li><h3>Created by: {{ $news->user->name }}</h3></li>
          <ul>
            <li>{{ $news->content }}</li>
          </ul>
          <a href="/news/{{ $news->id }}">details</a>
          <hr>

      @endforeach

    </ul>
    {{ $newses->links() }}
@endsection
