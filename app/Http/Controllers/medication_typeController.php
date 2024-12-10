<?php

namespace App\Http\Controllers;

use App\Models\medication_type;
use Illuminate\Http\Request;

class medication_typeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return medication_type::all();
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
    public function store(Request $request)
    {
        $compound = new medication_type();
        $compound->name = $request->name;
        $compound->description = fake()->paragraph();
        $compound->save();
        return ['success', $compound];
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

// name:Analgesics
// name:Antacids
// name:Antibiotics
// name:Anticoagulants
// name:Antidepressants
// name:Antihistamines
// name:Antiinflammatory
// name:Antipsychotics
// name:Betablockers
// name:Bronchodilators
// name:Corticosteroids
// name:Diuretics
// name:Hypoglycemics
// name:Statins