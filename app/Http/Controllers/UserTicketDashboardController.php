<?php

namespace App\Http\Controllers;

use App\Models\UserTicket;
use Illuminate\Http\Request;

class UserTicketDashboardController extends Controller
{
    public function UseTicket($id){
        // Fungsi untuk menggunakan ticket
        $userTicket = UserTicket::find($id);

    if (!$userTicket) {
        return redirect('/dashboard')->with('error', 'Ticket not found!');
    }

    $oldStatus = $userTicket->status;
    $newStatus = $oldStatus + 1;

    $userTicket->status = $newStatus;
    $userTicket->save();

        return redirect('/dashboard')->with('success', 'Ticket successfully used, wait for confirmation!');
    }

    public function UserTicketReport(){
        // Fungsi Untuk halaman Report yang berisikan Data Penggunaan dan history pembelien ticket oleh user
        return Response(view('dashboard.user-tickets.index', [
            'userTickets' => UserTicket::where('user_id', auth()->user()->id)->get()
        ]));
    }

    public function management(){
        // Fungsi untuk menampilkan user ticket yang telah digunakan, untuk di konfirmasi
        return Response(view('dashboard.user-tickets.management', [
            'userTickets' => UserTicket::latest()->get()
        ]));
    }
}
