<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationDashboardController extends Controller
{
    public function index(){
        // halaman untuk menampilkan daftar lokasi untuk dilakukan reservasi
        return Response(view());
    }

    public function manageReservations(){
        // menampilkan semua data reservasi untuk di konfirmasi
        return Response(view());
    }

    public function memberReservations(){
        // menampilkan data reservasi member
        return Response(view());
    }

    public function addReservation(){
        // halaman menambahkan reservasi baru
        return Response(view());
    }

    public function doReservation(){
        // halaman untuk user melakukan reservasi
        return Response(view());
    }
    public function storeAddReservation(){
        // menambahkan data reservasi baru
    }

    public function storeDoReservation(){
        // menambahkan data reservasi yang dilakukan user
    }
}
