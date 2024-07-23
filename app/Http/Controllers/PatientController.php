<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View|Factory|Application
    {
        $patients = Patient::all();
        return view('pages.patients-list', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View|Factory|Application
    {
        return view('pages.patient-form', ['patient' => new Patient]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'firstname'  => 'required|string|max:255',
            'lastname'  => 'required|string|max:255',
            'email'  => 'required|email|unique:patients',
            'phone' => 'required|string|max:18',
            'nhs_number' => 'required|string|unique:patients',
            'street' => 'required|string|max:255',
            'city'=> 'required|string|max:255',
            'postcode' => 'required|string|max:8',
            'dob' => 'required|date',
            'gender' => 'required|string|max:255',
            'status' => 'required|integer',
        ]);

        Auth::user()->patients()->create($request->all());

        return redirect()->route('patients')
            ->with('success', 'Patient created successfully.');
    }

    /**
     * Display the patient
     */
    public function show(Patient $patient): View|Factory|Application
    {
        return view('pages.patient-view', ['patient' => $patient]);
    }

    /**
     * Show the form for editing the patient
     */
    public function edit(Patient $patient): View|Factory|Application
    {
        return view('pages.patient-form', ['patient' => $patient]);
    }

    /**
     * Update the patient
     */
    public function update(Request $request, Patient $patient): RedirectResponse
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:patients,email,' . $patient->id,
            'phone' => 'required|string|max:15',
            'nhs_number' => 'required|string|max:10|unique:patients,nhs_number,' . $patient->id,
            'street' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postcode' => 'required|string|max:10',
            'dob' => 'required|date',
            'gender' => 'required|string||max:255',
            'status' => 'required|integer',
        ]);

        $patient->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'nhs_number' => $request->nhs_number,
            'street' => $request->street,
            'city' => $request->city,
            'postcode' => $request->postcode,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'status' => $request->status,
        ]);

        return redirect()->route('patients')->with('success', 'Patient updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Find the patient
        $patient = Patient::findOrFail($id);

        $patient->delete();

        // Redirect with a success message
        return redirect()->route('patients')->with('success', 'Patient deleted successfully.');
    }
}
