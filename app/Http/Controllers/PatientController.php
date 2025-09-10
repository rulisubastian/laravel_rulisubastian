<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Hospital;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index() {
        $hospitals = Hospital::all();
        $patients = Patient::with('hospital')->get();
        return view('patients.index', compact('patients', 'hospitals'));
    }

    public function create() {
        $hospitals = Hospital::all();
        return view('patients.create', compact('hospitals'));
    }

    public function store(Request $request) {
        Patient::create($request->all());
        return redirect()->route('patients.index');
    }

    public function edit(Patient $patient) {
        $hospitals = Hospital::all();
        return view('patients.edit', compact('patient', 'hospitals'));
    }

    public function update(Request $request, Patient $patient) {
        $patient->update($request->all());
        return redirect()->route('patients.index');
    }

    public function destroyAjax($id) {
        $patient = Patient::findOrFail($id);
        $patient->delete();
        return response()->json(['success' => true]);
    }

    public function filter($hospital_id) {
        $patients = Patient::where('hospital_id', $hospital_id)->with('hospital')->get();
        return response()->json($patients);
    }
}
