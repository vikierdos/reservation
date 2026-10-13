<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use App\Http\Requests\StoreTravelRequest;
use App\Http\Requests\UpdateTravelRequest;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Travel::all();
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
        $record = new Travel();
        $record->fill($request->all())->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(int $flight_id, int $user_id)
    {
        return Travel::where('flight_id', $flight_id)
            ->where('user_id', $user_id)
            ->firstOrFail();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Travel $travel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTravelRequest $request, Travel $travel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $flight_id, int $user_id)
    {
        Travel::where('flight_id', $flight_id)
            ->where('user_id', $user_id)
            ->delete();
    }
}
