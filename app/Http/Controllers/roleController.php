<?php

namespace App\Http\Controllers;

use App\Models\role;
use Illuminate\Http\Request;

class roleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return role::all();
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
        // dd($request->name);
        $role = new role();
        $role->name = $request->name;
        $role->description = fake()->paragraph();
        $role->staff_count = fake()->numberBetween(3,10);
        $role->responsibilities = fake()->randomLetter().fake()->numberBetween(0,10);
        $role->weekly_hours = fake()->numberBetween(36,63);
        $role->save();
        return ["message" => 'success role', $role];
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
