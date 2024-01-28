<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
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
            'name' => $this->faker->word,
            'include' => $this->faker->paragraph,
            'booking_code' => $this->faker->unique()->randomNumber(8),
            'status' => $this->faker->randomElement([0, 1]),
            'booking_date' => $this->faker->dateTimeThisMonth,
        ];
    }
}
