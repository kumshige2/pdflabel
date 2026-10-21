<?php

namespace Database\Factories;

use App\Models\T_syain_sanq01;
use App\Models\T_crs_sanq01;
use App\Models\T_sanq_kanren01;
use App\Models\T_sei;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class T_crs_sanq01Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // DB::table('t_crs_sanq01s')->delete();
        return [
            'crscd' => $this->faker->unique()->numberBetween($min = 23000, $max = 23999),
            'haiflg' => NULL,
            'crsno' => $this->faker->numberBetween($min = 23000, $max = 23999),
            'crsnj' => $this->faker->realText(20),
            'dan_crscd' => $this->faker->regexify('[1-9a-zA-Z]{5}'),
            'juryo' => $this->faker->numberBetween($min = 10000, $max = 50000),
            'jukmm' => $this->faker->numberBetween($min = 1, $max = 10),
            'zaimm' =>  Null,
            'kmk_su' => Null,
            'taisho' => Null,
            'dantai_cd' => $this->faker->randomElement($arraY = ['001', '002', '003', '004', '005', '006', '007']),
            'tok_dantai_cd' => $this->faker->randomElement($arraY = ['001', '002', '003', '004', '005', '006', '007']),
            'kyo_km' => NULL,
            'kaitei_yotei' => NULL,
            'address' => NULL,
            'saj_flg' => $this->faker->randomElement($arraY = ['', '1', '', '', '', '', '']),
            'sai_juryo' => $this->faker->randomElement($arraY = [0, 4400]),
            'sai_zaimm' => NULL,
            'sai_memo' => NULL,
            'hsn_crsno' => $this->faker->numberBetween($min = 100, $max = 550),
            'caution_flg' => 0,
        ];
    }
}
