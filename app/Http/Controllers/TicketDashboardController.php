<?php

namespace App\Http\Controllers;

use App\Models\TicketType;
use Illuminate\Http\Request;

class TicketDashboardController extends Controller
{
    public function index()
    {
        return Response(view('dashboard.ticket.index',[
            'tickets' => TicketType::latest()->get(),
        ]));
    }

    public function create()
    {
        return Response(view('dashboard.ticket.create'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type_name' => 'required|max:255|unique:ticket_types',
            'price' => 'required',
            'descriptions' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        TicketType::create($validatedData);

        return redirect('/dashboard/tickets')->with('success', 'New Ticket type has been added!');
    }

    public function edit(TicketType $ticketType)
    {
        return Response(view('dashboard.ticket.edit',[
            'ticket' => $ticketType,
        ]));
    }

    public function update(Request $request, TicketType $ticketType)
    {
        $rules = [
            'price' => 'required',
            'descriptions' => 'required'
        ];

        if ($request->type_name != $ticketType->type_name) {
            $rules['type_name'] = 'required|max:255|unique:ticket_types';
        }

        $validatedData = $request->validate($rules);

        TicketType::where('id', $ticketType->id)->update($validatedData);

        return redirect('/dashboard/tickets')->with('success', 'New Ticket type has been Edited!');
    }

    public function destroy(TicketType $ticketType)
    {
        TicketType::destroy($ticketType->id);
        return redirect('/dashboard/tickets')->with('success', 'Ticket Type has been deleted!');
    }
}
