<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationDashboardController extends Controller
{
    public function index(){
        // halaman untuk menampilkan daftar lokasi untuk dilakukan reservasi
    }

    public function allReservations(){
        // menampilkan semua data reservasi untuk di konfirmasi
    }

    public function memberReservations(){
        // menampilkan data reservasi member
    }

    public function addReservation(){
        // halaman menambahkan reservasi baru
    }

    public function makeReservation(){
        // halaman untuk user melakukan reservasi
    }
    public function storeAddReservation(){
        // menambahkan data reservasi baru
    }

    public function storeMakeReservation(){
        // menambahkan data reservasi yang dilakukan user
    }
}
