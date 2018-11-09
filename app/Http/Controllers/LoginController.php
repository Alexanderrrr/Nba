<?php

namespace App\Http\Controllers;
use App\User;
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

  public function verify($email)
  {
    $user = User::where('email',request('email'));
    $user->update(['is_verified' => 1]);

    return redirect('/')->with('message','You verified your account. You can login now');


  }

  public function logout()
  {
    auth()->logout();

    return redirect('/');
  }

}
