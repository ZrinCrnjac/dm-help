<?php

namespace App\Http\Controllers;

use App\Models\Sublocation;
use Illuminate\Http\Request;

class SublocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sublocation = Sublocation::all();

        return view('sublocations.index', compact('sublocation'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sublocations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sublocation = new Sublocation();
        $sublocation->name = $request->input('Name');
        $sublocation->description = $request->input('Description');
        $sublocation->location_id = $request->input('LocationId');
        $sublocation->save();

        return redirect('/sublocations')->with('success', 'Sublocation created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sublocation $sublocation)
    {
        return view('sublocations.show', ['sublocation' => $sublocation]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sublocation $sublocation)
    {
        return view('sublocations.edit', ['sublocation' => $sublocation]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sublocation $sublocation)
    {
        $sublocation->update($request->all());

        return redirect('/sublocations')->with('success', 'Sublocation updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sublocation $sublocation)
    {
        $sublocation->delete();

        return redirect('/sublocations')->with('success', 'Sublocation deleted!');
    }
}
