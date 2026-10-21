<?php

namespace Database\Factories;

use App\Models\T_syain_sanq01;
use App\Models\T_sanq_kanren01;
use App\Models\T_sei;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;


class T_sanq_kanren01Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //DB::table('t_sanq_kanren01s')->delete();

        return [
            'krn_kgocd' => $this->faker->unique()->numberBetween($min = 1000, $max = 9999),
            'krn_kgonm' => $this->faker->company(),
            'yubin' => $this->faker->postcode(),
            'addr1' => $this->faker->address(),
            'tel' => $this->faker->phonenumber(),
            'fax' => $this->faker->phonenumber(),
            'bu' => $this->faker->randomElement($arraY = ['人事部', '経理部', '第一営業部', '第二営業部', 'システム部', '総務部']),
            'tanto' => $this->faker->name(),
            'e_mail' => $this->faker->safeemail(),
        ];
    }
}
