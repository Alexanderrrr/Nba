<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Team;
use Illuminate\Validation\Rule;
use App\User;

class Comment extends Model
{
  protected $guarded = ['id'];

  const VALIDATION_RULES = [
      'content' => [
        'required',
        'min:10',
       'not_in:hate,idiot,stupid'
     ]
  ];


  public function user()
  {
      return $this->belongsTo(User::class);
  }

  public function team()
  {
      return $this->belongsTo(Team::class);

  }
}
