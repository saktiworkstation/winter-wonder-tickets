<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserTicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => mt_rand(1, 10),
            'ticket_type_id' => mt_rand(1, 10),
            'quantity' => $this->faker->numberBetween(1, 10),
            'total_price' => $this->faker->numberBetween(1000, 10000),
            'purchase_date' => $this->faker->dateTimeThisMonth,
            'status' => $this->faker->randomElement([0, 1, 2]),
        ];
    }
}
