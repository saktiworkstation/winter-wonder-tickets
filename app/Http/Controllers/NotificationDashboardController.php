<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationDashboardController extends Controller
{
    public function adminAction(){
        // Fungsi untuk halaman admin, isi dari tampilan semua notif
    }

    public function memberAction(){
        // Fungsi untuk halaman member, isi dari notif yang di dapatkan
    }

    public function addNotifToAll(){
        // Membuat notif yang akan diterima semua user
    }

    public function addNotifToOnePerson(){
        // Memberikan notif ke satu orang
    }
}
