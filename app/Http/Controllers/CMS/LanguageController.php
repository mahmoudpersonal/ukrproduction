<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index()
    {
        return view('cms.language.index');
    }

    public function update(Request $request)
    {
        $data_to_insert = [];
        Setting::query()->where('locale_id', 'like', '%' . $request->locale_id . '%')->delete();
        $data = $request->except('_token', 'locale_id');
        foreach ($data as $key => $value) {
            $data_to_insert[] = ['key' => $key, 'value' => $value, 'locale_id' => $request->locale_id];
        }
        Setting::query()->insert($data_to_insert);
        return redirect()->back();
    }

    public function getByLocale(Request $request)
    {
        return response()->json([Setting::query()->where('locale_id', $request->locale_id)->get()->pluck('value', 'key')]);
    }
}
