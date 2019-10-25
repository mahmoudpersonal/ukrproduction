<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fields = [
            'table_header' => ['name', 'type'],
            'model' => Area::all(),
            'attributes' =>
                [
                    [
                        'field' => 'name'
                    ],
                    [
                        'field' => 'type',
                        'array_of_field_key' => ['area', 'subarea']
                    ],
                ]
        ];
        $page_name = 'area';
        return view('cms.layouts.datatable.panel', compact('fields', 'page_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.area.edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $request->except('_token', '_method');
        $params['type'] = isset($params['type']) ? 1 : 0;
        Area::query()->create($params);
        return redirect()->route('area.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Area $area
     * @return \Illuminate\Http\Response
     */
    public function show(Area $area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Area $area
     * @return \Illuminate\Http\Response
     */
    public function edit(Area $area)
    {
        return view('cms.area.edit', compact('area'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Area $area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Area $area)
    {
        $params = $request->except('_token', '_method');
        $params['type'] = isset($params['type']) ? 1 : 0;
        $area->update($params);
        return redirect()->route('area.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Area $area
     * @return \Illuminate\Http\Response
     */
    public function destroy(Area $area)
    {
        Area::destroy($area->id);
        return response()->json(['message' => 'success']);
    }
}
