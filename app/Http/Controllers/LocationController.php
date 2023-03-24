<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::all();

        return view('locations.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('locations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $location = new Location();
        $location->name = $request->input('Name');
        $location->description = $request->input('Description');
        $location->person_in_charge = $request->input('PersonInCharge');
        $location->image = $request->file('Image')->store('images');
        $location->save();

        return redirect('/locations')->with('success', 'Location created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        return view('locations.show', ['location' => $location]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        return view('locations.edit', ['location' => $location]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {
        $location->update($request->all());

        return redirect('/locations')->with('success', 'Location updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        $location->delete();

        return redirect('/locations')->with('success', 'Location deleted!');
    }
}
