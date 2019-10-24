<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Team;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $team_members = User::query()->where('position', 'not like', 'admin')->get();

        return view('frontend.index', compact('team_members'));
    }
}
