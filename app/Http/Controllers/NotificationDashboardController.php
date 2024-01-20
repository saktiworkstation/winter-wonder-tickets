<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationDashboardController extends Controller
{
    public function adminView(){
        // Fungsi untuk halaman admin, isi dari tampilan semua notif
        return Response(view('dashboard.notification.admin',[
            'notifications' => Notification::latest()->paginate('6')
        ]));
    }

    public function memberView(){
        // Fungsi untuk halaman member, isi dari notif yang di dapatkan
        return Response(view('dashboard.notification.member', [
            'notifications' => Notification::where('user_id', auth()->user()->id)->latest()->paginate('6')
        ]));
    }

    public function addGeneralNotif(){
        // Membuat notif yang akan diterima semua user
        return Response(view('dashboard.notification.addGeneralNotif'));
    }

    public function storeGeneralNotif(){
        // Membuat notif yang akan diterima semua user
    }
    public function addPersonalNotif(){
        // Memberikan notif ke satu orang
        return Response(view('dashboard.notification.addPersonalNotif'));
    }

    public function storePersonalNotif(){
        // Memberikan notif ke satu orang
    }
}
