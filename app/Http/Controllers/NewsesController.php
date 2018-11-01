<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
class NewsesController extends Controller
{
    public function index()
    {
      $newses = News::paginate(5);
      return view('news', ['newses' => $newses]);
    }
}
