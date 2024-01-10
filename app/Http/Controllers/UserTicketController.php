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
        ]);

        // Use first() instead of firstwhere() to get the first record by the given conditions
        $ticketType = TicketType::where('id', $request->ticket_type_id)->first();

        if (!$ticketType) {
            // Handle the case where the ticket type is not found
            return redirect('/dashboard')->with('error', 'Ticket type not found!');
        }

        $quantity = $request->quantity;
        $price = $ticketType['price'];
        $amount = $price * $quantity;

        $purchase_date = now(); // Use the now() function to get the current date and time

        $validatedData['purchase_date'] = $purchase_date;
        $validatedData['total_price'] = $amount;
        $validatedData['status'] = 0;
        $validatedData['user_id'] = auth()->user()->id;

        UserTicket::create($validatedData);

        return redirect('/dashboard')->with('success', 'Successfully buying Ticket!');
    }

}
