<?php

namespace App\Http\Controllers;

use App\Models\TicketType;
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

        $ticketType[] = TicketType::firstwhere('id', $request->id);
        $quantity = $request->quantity;
        $price = $ticketType['price'];
        $amount = $price * $quantity;

        $validatedData['total_price'] = $amount;
        $validatedData['user_id'] = auth()->user()->id;

        UserTicket::create($validatedData);

        return redirect('/dashboard')->with('success', 'Successfully buyying Ticket!');
    }
}
