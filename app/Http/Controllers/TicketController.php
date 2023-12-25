<?php

namespace App\Http\Controllers;

use App\Models\TicketType;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(){
        //
    }

    public function detail(TicketType $ticketType){
        return view('tickets.detail', [
            'ticket' => $ticketType
        ]);
    }
}
