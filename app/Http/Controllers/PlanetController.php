<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlanetRequest;
use App\Models\Planet;

class PlanetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $planets = Planet::all();
        return view('planets.index', compact('planets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('planets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlanetRequest $request)
    {
        $planet = new Planet();
        $planet->name = $request->name;
        $planet->eng_name = $request->eng_name;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;
        $planet->save();

        return redirect(route('planets.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Planet $planet)
    {
        return view('planets.show', compact('planet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Planet $planet)
    {
        return view('planets.edit', compact('planet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PlanetRequest $request, Planet $planet)
    {
        $planet->name = $request->name;
        $planet->eng_name = $request->eng_name;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;
        $planet->update();

        return redirect(route('planets.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Planet $planet)
    {
        $planet->delete();
        return redirect(route('planets.index'));
    }
}
