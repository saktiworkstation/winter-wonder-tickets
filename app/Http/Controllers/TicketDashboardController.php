<?php

namespace App\Http\Controllers;

use App\Models\TicketType;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

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
        return Response();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Response();
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
        return Response();
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
        return Response();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TicketType  $ticketType
     * @return \Illuminate\Http\Response
     */
    public function destroy(TicketType $ticketType)
    {
        return Response();
    }
}
