<?php

namespace Database\Seeders;

use App\Models\Notification;
use App\Models\Reservation;
use App\Models\TicketType;
use App\Models\User;
use App\Models\UserTicket;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Sakti Kusuma Aji',
            'username' => 'sakti',
            'phone_number' => '085336925308',
            'email' => 'sakti@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::factory(10)->create();
        TicketType::factory(10)->create();
        UserTicket::factory(10)->create();
        Notification::factory(10)->create();
        Reservation::factory(10)->create();
    }
}
