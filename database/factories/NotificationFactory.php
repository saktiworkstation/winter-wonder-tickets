<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NotificationFactory extends Factory
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
            'message' => $this->faker->sentence,
            'send_date' => $this->faker->dateTimeThisMonth,
            'read_status' => $this->faker->randomElement([0, 1]),
        ];
    }
}
