<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationDashboardController extends Controller
{
    public function index(){
        // halaman untuk menampilkan daftar lokasi untuk dilakukan reservasi
        return Response(view('dashboard.reservation.index',[
            'reservations' => Reservation::latest()->get(),
        ]));
    }

    public function manageReservations(){
        // menampilkan semua data reservasi untuk di konfirmasi
        return Response(view('dashboard.reservation.management',[
            'reservations' => Reservation::latest()->get(),
        ]));
    }

    public function memberReservations(){
        // menampilkan data reservasi member
        return Response(view('dashboard.reservation.member-reservation', [
            'reservations' => Reservation::where('user_id', auth()->user()->id)->get(),
        ]));
    }

    public function addReservation(){
        // halaman menambahkan reservasi baru
        return Response(view('dashboard.reservation.create'));
    }

    public function doReservation(){
        // halaman untuk user melakukan reservasi
        return Response(view('dashboard.reservation.do-reservation'));
    }
    public function storeAddReservation(){
        // menambahkan data reservasi baru
    }

    public function storeDoReservation(){
        // menambahkan data reservasi yang dilakukan user
    }
}
