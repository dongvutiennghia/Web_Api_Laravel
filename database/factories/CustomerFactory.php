<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Database\Factories\Administration\FlightFactory;
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_customer' => $this->faker->firstname(),
            'phone_customer' => $this->faker->phoneNumber(),
            'address_customer' => $this->faker->address(),

            'email_customer' => $this->faker->unique()->safeEmail(),
            'city_customer' => $this->faker->city(),

        ];
    }
}
