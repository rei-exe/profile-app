<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return 
            [
                'name' => $this->faker->name(),
                'email' => $this->faker->email(),
                'birthdate' => $this->faker->date(),
                'home_address' => $this->faker->address(),
                'contact_number' => $this->faker->phoneNumber(),
            ];
    }
}
