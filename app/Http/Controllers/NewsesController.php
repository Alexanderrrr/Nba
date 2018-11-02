<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\User;
class NewsesController extends Controller
{
    public function index()
    {
      $newses = News::paginate(5);
      return view('news.index', ['newses' => $newses]);
    }

    public function show($id)
    {
        $news = News::with('user','team')->find($id);
        return view('news.show', ['news' => $news]);
    }


}
