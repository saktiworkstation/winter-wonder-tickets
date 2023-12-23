<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TicketTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type_name' => $this->faker->word,
            'descriptions' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween(1000, 10000),
        ];
    }
}
