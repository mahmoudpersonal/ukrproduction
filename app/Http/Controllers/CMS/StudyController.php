<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Study;
use Illuminate\Http\Request;

class StudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fields = [
            'table_header' => ['patient', 'examination'],
            'model' => Study::all(),
            'attributes' =>
                [
                    [
                        'type' => 'object',
                        'reference' => ['patient', 'full_name']
                    ],
                    [
                        'type' => 'field',
                        'field' => 'examination'
                    ],
                ]
        ];
        $page_name = 'study';
        return view('cms.layouts.datatable.panel', compact('fields', 'page_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Study $study
     * @return \Illuminate\Http\Response
     */
    public function show(Study $study)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Study $study
     * @return \Illuminate\Http\Response
     */
    public function edit(Study $study)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Study $study
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Study $study)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Study $study
     * @return \Illuminate\Http\Response
     */
    public function destroy(Study $study)
    {
        //
    }
}
