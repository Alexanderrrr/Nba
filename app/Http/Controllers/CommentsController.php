<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Team;

class CommentsController extends Controller
{
   public function __construct()
   {
       $this->middleware('forbidden-words-in-comments');
   }


    public function store($teamId)
    {
      $comment = new Comment();
      $comment->content = request('content');
      $comment->team_id = $teamId;
      $comment->user_id = auth()->user()->id;
      $comment->save();

      return redirect("/nba/teams/{$teamId}");
    }

    public function forbidden()
    {
        return view('comments.forbidden-comments');
    }
}
