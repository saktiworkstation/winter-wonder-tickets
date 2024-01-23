<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\User;
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
            'notifications' => Notification::latest()->paginate('6')
        ]));
    }

    public function addGeneralNotif(){
        // Membuat notif yang akan diterima semua user
        return Response(view('dashboard.notification.addGeneralNotif'));
    }

    public function storeGeneralNotif(Request $request){
        // Membuat notif yang akan diterima semua user
        $validatedData = $request->validate([
            'message' => 'required'
        ]);

        $validatedData['status'] = '1';
        $validatedData['send_date'] = now()->format('Y-m-d');

        Notification::create($validatedData);

        return redirect('/dashboard/notifications/admin')->with('success', 'New general Notification has been sended!');
    }
    public function addPersonalNotif(){
        // Memberikan notif ke satu orang
        return Response(view('dashboard.notification.addPersonalNotif',[
            'users' => User::latest()->get()
        ]));
    }

    public function storePersonalNotif(Request $request){
        // Memberikan notif ke satu orang
        $validatedData = $request->validate([
            'user_id' => 'required',
            'message' => 'required'
        ]);

        $validatedData['status'] = '0';
        $validatedData['send_date'] = now()->format('Y-m-d');

        Notification::create($validatedData);

        return redirect('/dashboard/notifications/admin')->with('success', 'New personal Notification has been sended!');
    }
}
