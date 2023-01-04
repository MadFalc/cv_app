<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

                'first_name' => $this->faker->firstName(),
                'last_name' => $this->faker->lastName(),
                'phone' => $this->faker->phoneNumber,
                'address' => $this->faker->address,
                'email' => $this->faker->email(),
                'date_of_birth' => $this->faker->dateTimeBetween('-30 years', 'now'),
                'nationality' => $this->faker->country,
                'linkedin_profile' => $this->faker->url,
        ];
    }
}
