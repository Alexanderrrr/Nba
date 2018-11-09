<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      $teams = Team::all();
      return view('teams', ['teams' => $teams]);
    }

    public function show($id)
    {
      $team = Team::with('news')->find($id);
      return view('show', ['team' => $team]);
    }


}
