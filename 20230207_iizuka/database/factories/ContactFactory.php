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
            'fullname' => $this->faker->name,
            'gender' => rand(1,2),
            'email' => $this->faker->email,
            'postcode' =>$this->faker->numerify('###-####'),
            'address' => $this->faker->address('prefecture'),
            'building_name' => $this->faker->secondaryAddress,
            'opinion' => $this->faker->realText(120,5),
        ];
    }
}
