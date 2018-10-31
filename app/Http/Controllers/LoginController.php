<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

  public function __construct()
  {
      $this->middleware('guest',['except' => 'logout']);
  }

  public function index()
  {
    return view('login.index');
  }

  public function login()
  {

    if(!auth()->attempt(request(['email', 'password']))) {

        return back()
               ->withErrors([

                 'message' => 'Wrong email or password!'
               ]);
    }
    return redirect('/nba');
  }

  public function verify()
  {
    $user = User::class;
    dd($user);
  }

  public function logout()
  {
    auth()->logout();

    return redirect('/');
  }

}
