@extends('master')

@section('title')
    Sign Up
@endsection

@section('content')

      <form class="form-signin" method="POST" action="/register">

        {{ csrf_field() }}

        <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
        <label>Name</label>
        <input type="text" name="name" class="form-control" placeholder="You Name">
        @include('partials.error_messagge', ['field' => 'name']) <!-- gadjamo name od inputa -->

        <label>Email address</label>
        <input type="email" name="email" class="form-control" placeholder="Email address">
        @include('partials.error_messagge', ['field' => 'email']) <!-- gadjamo name od inputa -->

        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password">
        @include('partials.error_messagge', ['field' => 'password']) <!-- gadjamo name od inputa -->

        <label>Enter Password Again</label>
        <input type="password" name="password_confirmation" class="form-control" placeholder="Enter Password Again">
        @include('partials.error_messagge', ['field' => 'password_confirmation']) <!-- gadjamo name od inputa -->
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
      </form>

@endsection
