<?php

namespace App\Http\Controllers;

use App\Models\brand;
use Illuminate\Http\Request;

class brandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return brand::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return ["this" => "what to create"];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $brand = new brand();
        $brand->name = $request->name;
        $brand->description = fake()->paragraph();
        $brand->save();
        return ['success', $brand];
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
