<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = ('name');
        return [
            'name' => $this->faker->name,
            'gender' => $this->faker->randomElement($array=['男性','女性']),
            'email' => $this->faker->email,
            'address' => $this->faker->address,
            'building_name' => $this->faker->secondaryAddress,
            'comment' => $this->faker->realText(120),
        ];
    }
}
