<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Ticket;
use App\Models\Ticket_Type;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::with('ticket_type', 'division')->get();

        return view('dashboard/ticket/index')->with('tickets', $tickets);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ticket_types = Ticket_Type::all();
        $divisions = Division::all();

        return view('dashboard/ticket/create')->with('ticket_types', $ticket_types)->with('divisions', $divisions);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'note' => 'required',
            'ticket_type_id' => 'required',
            'division_id' => 'required',
            'address' => 'required',
        ]);

        $ticket = Ticket::create([
            'name' => $request->name,
            'note' => $request->note,
            'division_id' => $request->division_id,
            'ticket_type_id' => $request->ticket_type_id,
            'address' => $request->address,
        ]);

        if ($ticket) {
            return redirect()->route('ticket.index')->with('success', 'Ticket created successfully');
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
        $ticket = Ticket::find($id);
        $ticket_types = Ticket_Type::all();
        $divisions = Division::all();


        return view('dashboard/ticket/edit')->with('ticket', $ticket)->with('ticket_types', $ticket_types)->with('divisions', $divisions);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'note' => 'required',
            'ticket_type_id' => 'required',
            'division_id' => 'required',

            'address' => 'required',
        ]);

        $ticket = Ticket::find($id);

        if ($ticket) {
            $ticket->update([
                'name' => $request->name,
                'note' => $request->note,
                'ticket_type_id' => $request->ticket_type_id,
                'address' => $request->address,
                'division_id' => $request->division_id,
            ]);
            return redirect()->route('ticket.index')->with('success', 'Ticket updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ticket = Ticket::find($id);

        if ($ticket) {
            $ticket->delete();
            return redirect()->route('ticket.index')->with('success', 'Ticket deleted successfully');
        }
    }
}
