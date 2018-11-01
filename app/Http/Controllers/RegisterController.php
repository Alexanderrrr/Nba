<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\VerifieAccount;
use Illuminate\Support\Facades\Mail;
class RegisterController extends Controller
{

    public function __construct()
    {
      $this->middleware('guest');
    }
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
      $this->validate(
        request(),
        User::VALIDATION_RULES
      );

      $user = new User();
      $user->name = request('name');
      $user->email = request('email');
      $user->password = bcrypt(request('password'));
      $user->save();

      Mail::to($user)->send(new VerifieAccount($user));

      return redirect('/')->with('messagge',["You need to verify your mail. We sent verification code at {$user->email}"]);;
      //auth()->login($user);

    }

}
