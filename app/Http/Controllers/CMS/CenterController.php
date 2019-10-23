<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Center;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CenterController extends Controller
{
    private $validation_rules = ['name' => 'required', 'city_id' => 'required|exists:cities,id'];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centers = Center::query()->with('city')->get();
        return view('cms.center.index', compact('centers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('cms.center.edit', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->validation_rules);
        $params = $request->except('_token', '_method', 'country_id');
        Center::query()->create($params);
        return redirect()->route('center.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $center = Center::query()->with('city')->find($id);
        $countries = Country::all();
        $cities = $center->city->country->cities;
        return view('cms.center.edit', compact('center', 'cities', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, $this->validation_rules);
        $params = $request->except('_token', '_method', 'country_id');
        Center::query()->where('id', $id)->update($params);
        return redirect()->route('center.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Center::destroy($id);
        return response()->json(['message' => 'success']);
    }
}
