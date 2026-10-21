<?php

namespace Database\Factories;

use App\Models\Board;
use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        DB::table('people')->delete();
        return [
            'id' => $this->faker->unique()->regexify('[1-9]{5}'),
            'name' => $this->faker->name(),
            'mail' => $this->faker->safeemail(),
            'age' => $this->faker->regexify('[1-9]{2}'),
        ];
    }
}
