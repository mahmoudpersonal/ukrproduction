<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::query()->with('city')->get();
        return view('cms.patient.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('cms.patient.edit', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $request->except('_token', '_method', 'country_id');
        Patient::query()->create($params);
        return redirect()->route('patient.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        $countries = Country::all();
        $cities = $patient->city->country->cities;
        return view('cms.patient.edit', compact('countries', 'cities', 'patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $patient->update($request->except('_token', '_method', 'country_id'));
        return redirect()->route('patient.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        Patient::destroy($patient->id);
        return response()->json(['message' => 'success']);
    }
}
