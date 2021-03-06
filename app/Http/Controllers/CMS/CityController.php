<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fields = [
            'table_header' => ['country', 'name'],
            'model' => City::all(),
            'attributes' =>
                [
                    [
                        'reference' => ['country', 'name']
                    ],
                    [
                        'field' => 'name'
                    ],
                ]
        ];
        $page_name = 'city';
        return view('cms.layouts.datatable.panel', compact('fields', 'page_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'countries' => Country::all()
        ];
        return view('cms.city.edit', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        City::query()->create($request->except('_token', '_method'));
        return redirect()->route('city.index');
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
        $data = [
            'countries' => Country::all(),
            'city' => City::query()->find($id)
        ];
        return view('cms.city.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        City::query()->find($id)->update($request->except('_token', '_method'));
        return redirect()->route('city.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        City::destroy($id);
        return response()->json(['message' => 'success']);
    }

    public function getByCountry(Request $request)
    {
        return json_encode(Country::query()->find($request->country_id)->cities->pluck('name', 'id'));
    }
}
