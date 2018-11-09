<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <title>@yield('title')</title>

  </head>
    <body>
      @include('partials.navbar')
      <style media="screen">
      html,
      body {
      height: 100%;
      }

      .mycontainer {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-align: center;
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #f5f5f5;
      }

      .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
      }
      .form-signin .checkbox {
      font-weight: 400;
      }
      .form-signin .form-control {
      position: relative;
      box-sizing: border-box;
      height: auto;
      padding: 10px;
      font-size: 16px;
      }
      .form-signin .form-control:focus {
      z-index: 2;
      }
      .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
      }
      .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
      }
      </style>
<div class="mycontainer">
<main class="container">
  @if($flash = session('message'))
      <div class="alert alert-success">
          {{ $flash }}
      </div>
  @endif
  @if(auth()->check())
  <h2>Hello, {{ auth()->user()->name }}</h2>
  <hr/>
  @endif

  <div>

      @yield('content')

  </div>
</main>
<aside class="col-md-4 blog-sidebar">
  @if(auth()->check())

     @include('partials.sidebar')
 @endif

</aside><!-- /.blog-sidebar -->
</div>

    </body>
</html>
