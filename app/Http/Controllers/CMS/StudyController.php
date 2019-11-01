<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Center;
use App\Models\Patient;
use App\Models\Study;
use App\User;
use App\Utils\ImageUpload;
use Illuminate\Http\Request;

class StudyController extends Controller
{
    use ImageUpload;

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
        $data = [
            'patients' => Patient::all(),
            'areas' => Area::query()->where('type', 0)->get(),
            'subareas' => Area::query()->where('type', 1)->get(),
            'centers' => Center::all(),
            'doctors' => User::all(),
            'priorities' => ['emergency', 'urgent', 'normal', 'deferred']
        ];
        return view('cms.study.edit', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $request->except('_token', '_method', 'logo');
        if ($request->has('logo')) {
            $files = $request->file('logo');
            foreach ($files as $file) {
                $image = $file;
                $name = ($request->input('examination')) . '_' . time();
                $folder = '/img/studies' . Patient::query()->find($request->patient_id)->reference . '/';
                $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
                $this->uploadOne($image, $folder, 'public', $name);
                if (isset($params['image']))
                    $params['image'] .= ';' . $filePath;
                else
                    $params['image'] = $filePath;
            }
        }
        Study::query()->create($params);
        return redirect()->route('study.index');
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
        $data = [
            'patients' => Patient::all(),
            'areas' => Area::query()->where('type', 0)->get(),
            'subareas' => Area::query()->where('type', 1)->get(),
            'centers' => Center::all(),
            'doctors' => User::all(),
            'priorities' => ['emergency', 'urgent', 'normal', 'deferred'],
            'study' => $study
        ];
        return view('cms.study.edit', $data);
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
        $params = $request->except('_token', '_method', 'logo');
        if ($request->has('logo')) {
            $files = $request->file('logo');
            foreach ($files as $file) {
                $image = $file;
                $name = ($request->input('examination')) . '_' . time();
                $folder = '/img/studies' . Patient::query()->find($request->patient_id)->reference . '/';
                $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
                $this->uploadOne($image, $folder, 'public', $name);
                if (isset($params['image']))
                    $params['image'] .= ';' . $filePath;
                else
                    $params['image'] = $filePath;
            }

        }
        $study->update($params);
        return redirect()->route('study.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Study $study
     * @return \Illuminate\Http\Response
     */
    public function destroy(Study $study)
    {
        Study::destroy($study->id);
        return response()->json(['message' => 'success']);
    }
}
