<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Ticket;
use App\Models\Ticket_Type;
use Illuminate\Http\Request;

class EndUserController extends Controller
{
    public function index()
    {
        $ticket_types = Ticket_Type::all();
        $divisions = Division::all();


        return view('/end-user/create-ticket')->with('ticket_types', $ticket_types)->with('divisions', $divisions);
    }

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
            return redirect()->back()->with('success', 'Ticket created successfully');
        }
    }
}
