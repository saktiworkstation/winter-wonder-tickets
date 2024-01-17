<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationDashboardController extends Controller
{
    public function adminView(){
        // Fungsi untuk halaman admin, isi dari tampilan semua notif
        return Response(view('dashboard.notification.admin',[
            'notifications' => Notification::latest()->get()
        ]));
    }

    public function memberView(){
        // Fungsi untuk halaman member, isi dari notif yang di dapatkan
        return Response(view('dashboard.notification.member', [
            'notifications' => Notification::where('user_id', auth()->user()->id)->latest()->get()
        ]));
    }

    public function addNotifToAll(){
        // Membuat notif yang akan diterima semua user
    }

    public function addNotifToOnePerson(){
        // Memberikan notif ke satu orang
    }
}
