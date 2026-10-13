<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use Illuminate\Http\Request;

class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Airline::all();
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
        $record = new Airline();
        $record->fill($request->all())->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Airline $airline)
    {
        return $airline;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Airline $flight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Airline $airline)
    {
        $airline->fill($request->all())->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Airline $airline)
    {
        $airline->delete();
    }
}
