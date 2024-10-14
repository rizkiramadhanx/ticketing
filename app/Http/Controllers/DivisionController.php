<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $divisions = Division::all();
        
        return view('dashboard/division/index')->with('divisions', $divisions);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard/division/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $division = Division::create([
            'name' => $request->name,
        ]);

        if ($division) {
            return redirect()->route('division.index')->with('success', 'Division created successfully');
        }
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
        $division = Division::find($id);

        return view('dashboard/division/edit')->with('division', $division);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $division = Division::find($id);

        if ($division) {
            $division->update([
                'name' => $request->name,
            ]);
            return redirect()->route('division.index')->with('success', 'Division updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $division = Division::find($id);

        if ($division) {
            $division->delete();
            return redirect()->route('division.index')->with('success', 'Division deleted successfully');
        }
    }
}
