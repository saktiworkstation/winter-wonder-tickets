<?php

namespace App\Http\Controllers;

use App\Models\UserTicket;
use Illuminate\Http\Request;

class UserTicketDashboardController extends Controller
{
    public function UseTicket(){
        // Fungsi untuk menggunakan ticket
    }

    public function UserTicketReport(){
        // Fungsi Untuk halaman Report yang berisikan Data Penggunaan dan history pembelien ticket oleh user
        return Response(view('dashboard.user-tickets.index', [
            'userTickets' => UserTicket::where('user_id', auth()->user()->id)->get()
        ]));
    }
}
