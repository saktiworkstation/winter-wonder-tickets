<?php

namespace App\Http\Controllers;

use App\Models\UserTicket;
use Illuminate\Http\Request;

class UserTicketController extends Controller
{
    public function buy(Request $request){
        $validatedData = $request->validate([
            'ticket_type_id' => 'required',
            'quantity' => 'required',
            'purchase_date' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        UserTicket::create($validatedData);

        return redirect('/dashboard')->with('success', 'Successfully buyying Ticket!');
    }
}
