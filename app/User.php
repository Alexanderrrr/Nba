<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
    const VALIDATION_RULES = [

        'name' => 'required',
        'email' => 'required | email',
        'password' => 'required_with:password_confirmation|same:password_confirmation',
        'password_confirmation'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comments()
    {
      return $this->hasMany(Comment::class);
    }


    public function news()
    {
      return $this->hasMany(News::class);
    }

}
