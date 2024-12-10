<?php

namespace App\Http\Controllers;

use App\Models\medication;
use Illuminate\Http\Request;

class medicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return medication::all();
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
        $meds = new medication();
        $meds->name = $request->name;
        $meds->dosage = fake()->numberBetween(1, 6);
        // $meds->brand = fake()->numberBetween(3,10);
        $meds->quantity = fake()->numberBetween(10,50);
        $meds->price = fake()->numberBetween(100,1000);
        $meds->stock = fake()->numberBetween(1,30);
        $meds->previous_order_quantity = fake()->numberBetween(1,30);
        $meds->previous_order_date = fake()->date();
        $meds->next_order_quantity = fake()->numberBetween(1,30);
        $meds->next_order_date = fake()->date();
        $meds->average_use = fake()->numberBetween(1,30);
        $meds->total_order = fake()->numberBetween(50000,500000);
        $meds->order_cost = fake()->numberBetween(2000,20000);
        $meds->save();
        return ["message" => 'success role', $meds];
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
