<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $team_members = Team::all();

        return view('frontend.index', compact('team_members'));
    }
}
