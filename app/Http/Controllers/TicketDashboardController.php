<?php

namespace App\Http\Controllers;

use App\Models\TicketType;
use Illuminate\Http\Request;
use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\Storage;

class TicketDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response(view('dashboard.ticket.index',[
            'tickets' => TicketType::latest()->get(),
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Response(view('dashboard.ticket.create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type_name' => 'required|max:255|unique:ticket_types',
            'price' => 'required',
            'descriptions' => 'required'
        ]);

        TicketType::create($validatedData);

        return redirect('/dashboard/tickets')->with('success', 'New Ticket type has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TicketType  $ticketType
     * @return \Illuminate\Http\Response
     */
    public function show(TicketType $ticketType)
    {
        return Response();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TicketType  $ticketType
     * @return \Illuminate\Http\Response
     */
    public function edit(TicketType $ticketType)
    {
        return Response(view('dashboard.ticket.edit',[
            'ticket' => $ticketType,
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TicketType  $ticketType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TicketType $ticketType)
    {
        $validatedData = $request->validate([
            'type_name' => 'required|max:255|unique:ticket_types',
            'price' => 'required',
            'descriptions' => 'required'
        ]);

        TicketType::where('id', $ticketType->id)->update($validatedData);

        return redirect('/dashboard/tickets')->with('success', 'New Ticket type has been Edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TicketType  $ticketType
     * @return \Illuminate\Http\Response
     */
    public function destroy(TicketType $ticketType)
    {
        TicketType::destroy($ticketType->id);
        return redirect('/dashboard/tickets')->with('success', 'Ticket Type has been deleted!');
    }
}
