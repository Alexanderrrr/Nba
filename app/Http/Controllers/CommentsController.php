<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Team;
use App\Mail\CommentReceived;
use Illuminate\Support\Facades\Mail;
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

      Mail::to(request()->user())->send(new CommentReceived($comment));

      return redirect("/nba/teams/{$teamId}");
    }

    public function forbidden()
    {
        return view('emails.forbidden-comments');
    }
}
