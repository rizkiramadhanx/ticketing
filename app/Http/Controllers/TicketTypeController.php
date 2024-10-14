<?php

namespace App\Http\Controllers;

use App\Models\Ticket_Type;
use Illuminate\Http\Request;

class TicketTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticket_types = Ticket_Type::all();

        return view('dashboard/ticket_type/index')->with('ticket_types', $ticket_types);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard/ticket_type/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $ticket_type = Ticket_Type::create([
            'name' => $request->name,
        ]);

        if ($ticket_type) {
            return redirect()->route('ticket_type.index')->with('success', 'Ticket type created successfully');
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
        $ticket_type = Ticket_Type::find($id);

        return view('dashboard/ticket_type/edit')->with('ticket_type', $ticket_type);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $ticket_type = Ticket_Type::find($id);

        if ($ticket_type) {
            $ticket_type->update([
                'name' => $request->name,
            ]);
            return redirect()->route('ticket_type.index')->with('success', 'Ticket type updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ticket = Ticket_Type::find($id);

        if ($ticket) {
            $ticket->delete();
            return redirect()->route('ticket_type.index')->with('success', 'Ticket type deleted successfully');
        }
    }
}
