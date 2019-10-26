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
        $team_members = User::query()->viewable()->get();

        return view('frontend.index', compact('team_members'));
    }

    public function uploadImage(Request $request)
    {

    }

    public function changeLang(Request $request)
    {
        session()->put('current_locale', $request->lang);
        return redirect()->route('home');
    }
}
