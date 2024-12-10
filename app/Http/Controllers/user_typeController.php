<?php

namespace App\Http\Controllers;

use App\Models\user_type;
use Illuminate\Http\Request;

class user_typeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return user_type::all();
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
        $usertype = new user_type();
        $usertype->name = $request->name;
        $usertype->description = fake()->paragraph();
        $usertype->save();
        return ['success user type', $usertype]; 
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
