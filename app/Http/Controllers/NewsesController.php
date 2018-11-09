<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\User;
use App\Team;

class NewsesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $newses = News::latest()->paginate(5);
      return view('news.index', ['newses' => $newses]);
    }

    public function show($id)
    {
        $news = News::with('user','team')->findOrFail($id);
        return view('news.show', ['news' => $news]);
    }


    public function create()
    {
        $teams = Team::all();
        return view('news.create', ['teams' => $teams]);
    }

    public function store()
{      $news = new News;
       $news->title = request('title');
       $news->content = request('content');
       $news->user_id = auth()->user()->id;

       $news->save();

       $news->team()->attach(request('teams'));
       session()->flash('message','Thank you for publishing article on www.nba.com');
       return redirect('/news');
    }

}
