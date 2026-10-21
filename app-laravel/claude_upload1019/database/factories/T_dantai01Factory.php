<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class T_dantai01Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dantai_cd' => $this->faker->unique()->regexify('[1-9]{5}'),
            //'id' => $this->faker->regexify('[1-9]{8}'),
            'dname' => $this->faker->company(),
            'dname_k' => $this->faker->city(),
            'dantai_cd_sg' => $this->faker->numberBetween($min = 100, $max = 110),
        ];
    }
}
