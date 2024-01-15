<?php

namespace App\Http\Controllers;

use App\Models\UserTicket;
use Illuminate\Http\Request;

class UserTicketDashboardController extends Controller
{
    public function UseTicket(Request $request, UserTicket $userTicket){
        // Fungsi untuk menggunakan ticket
        $rules = [];
        $oldStatus = $request->status;
        $newStatus = $oldStatus + 1;

        $rules['status'] = $newStatus;

        UserTicket::where('id', $userTicket->id)->update($rules);

        return redirect('/dashboard')->with('success', 'Ticket successfully used, wait for confirmation!');
    }

    public function UserTicketReport(){
        // Fungsi Untuk halaman Report yang berisikan Data Penggunaan dan history pembelien ticket oleh user
        return Response(view('dashboard.user-tickets.index', [
            'userTickets' => UserTicket::where('user_id', auth()->user()->id)->get()
        ]));
    }
}
