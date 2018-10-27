<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Team;

class Comment extends Model
{
  protected $guarded = ['id'];

  const VALIDATION_RULES = [

      'content' => 'required | min:10',

  ];

  public function post()
  {
      return $this->belongsTo(Team::class);
  }
}
