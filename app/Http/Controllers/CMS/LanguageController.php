<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index()
    {
        return view('cms.language.index');
    }

    public function update(Request $request)
    {

    }

    public function getByLocale(Request $request)
    {

    }
}
