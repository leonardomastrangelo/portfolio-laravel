<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePassionRequest;
use App\Http\Requests\UpdatePassionRequest;
use App\Models\Passion;

class PassionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StorePassionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Passion $passion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Passion $passion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePassionRequest $request, Passion $passion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Passion $passion)
    {
        //
    }
}
