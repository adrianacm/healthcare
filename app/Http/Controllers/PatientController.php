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
        return view('pages.patients-view', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
            'status' => 'required|tinyint|default:1',
        ]);

        Auth::user()->patients()->create($request->all());

        return redirect()->route('patients')
            ->with('success', 'Patient created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
