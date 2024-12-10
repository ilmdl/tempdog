<?php

namespace App\Http\Controllers;

use App\Models\compound;
use Illuminate\Http\Request;

class compoundController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return compound::all();
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
        $compound = new compound();
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

// name:Abraxane
// name:Abrilada
// name:Abrysvo
// name:Acanya
// name:Actemra
// name:Actimmune
// name:Activase
// name:Adacel
// name:Adakveo
// name:Adbry
// name:Adcetris
// name:Admelog
// name:Advate
// name:Adynovate
// name:Adzynma
// name:Affinity
// name:Afinitor
// name:Afstyla
// name:Agamree
// name:Agrylin
// name:Aimovig