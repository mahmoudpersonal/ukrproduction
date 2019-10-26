<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\User;
use App\Utils\ImageUpload;
use Illuminate\Http\Request;

class UserController extends Controller
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
            'table_header' => ['name', 'position'],
            'model' => User::query()->where('id', '<>', auth()->id())->get(),
            'attributes' =>
                [
                    [
                        'field' => 'name'
                    ],
                    [
                        'field' => 'position'
                    ],
                ]
        ];
        $page_name = 'user';
        return view('cms.layouts.datatable.panel', compact('fields', 'page_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.user.edit');
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
        $this->validate($request, ['email' => 'nullable|unique:users,email', 'password' => 'confirmed']);
        $params = $request->except('_token', '_method', 'password_confirmation', 'logo');
        $params['viewable'] = $request->has('viewable') ? 1 : 0;
        $params['admin'] = $request->has('admin') ? 1 : 0;
        if ($request->has('logo')) {
            $image = $request->file('logo');
            $name = ($request->input('name')) . '_' . time();
            $folder = '/img/team/';
            $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
            $params['image'] = '/storage/' . $filePath;
        }
        User::query()->create($params);
        return redirect()->route('user.index');
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
        $user = User::query()->find($id);
        return view('cms.user.edit', compact('user'));
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
        $this->validate($request, ['email' => 'nullable|unique:users,email', 'password' => 'confirmed']);
        $params = $request->except('_token', '_method', 'password_confirmation', 'logo');
        $params['viewable'] = $request->has('viewable') ? 1 : 0;
        $params['admin'] = $request->has('admin') ? 1 : 0;
        if ($request->has('logo')) {
            $image = $request->file('logo');
            $name = ($request->input('name')) . '_' . time();
            $folder = '/img/team/';
            $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
            $params['image'] = '/storage/' . $filePath;
        }
        User::query()->find($id)->update($params);
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return response()->json(['message' => 'success']);
    }
}
