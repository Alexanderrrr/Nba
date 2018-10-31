@extends('master')

@section('title')
    Login
@endsection

@section('content')

      <form class="form-signin" method="POST" action="/login">

        {{ csrf_field() }}

        <h1 class="h3 mb-3 font-weight-normal">Please login</h1>


        <label>Email address</label>
        <input type="email" name="email" class="form-control" placeholder="Email address">

        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password">

        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      </form>

      @if(count($errors->all()))
          @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}

            </div>
          @endforeach
      @endif
@endsection
