<?php

namespace Database\Seeders;

use App\Models\TicketType;
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
        // \App\Models\User::factory(10)->create();

        TicketType::factory(10)->create();
        UserTicket::factory(10)->create();
    }
}
