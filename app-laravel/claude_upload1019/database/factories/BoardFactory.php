<?php

namespace Database\Factories;

use App\Models\Person;
use App\Models\Board;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class BoardFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    DB::table('boards')->delete();
    return [
      'id' => $this->faker->unique()->regexify('[0-9]{3}'),
      'person_id' => Person::factory(),
      'title' => $this->faker->country(),
      'message' => $this->faker->realtext(),
    ];
  }
}
