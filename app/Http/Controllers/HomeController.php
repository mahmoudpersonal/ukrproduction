<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Setting;
use App\Models\Team;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function testMail()
    {
        Mail::to('mahmood.jomaa@gmail.com')
            ->send(new TestMail("Hello World!!"));
    }

    public function storeStudy(Request $request)
    {
        dd($request);
    }
}
