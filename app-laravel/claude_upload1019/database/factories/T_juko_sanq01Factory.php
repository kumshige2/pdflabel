<?php

namespace Database\Factories;

use App\Models\T_juko_sanq01;
use App\Models\T_crs_sanq01;
use App\Models\T_syain_sanq01;
use App\Models\T_kanren_sanq01;
use App\Models\T_sei;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;


class T_juko_sanq01Factory extends Factory
{
    protected $model = T_juko_sanq01::class;

    public function definition()
    {
        //DB::table('t_juko_sanq01s')->delete();
        //
        return [
            // 'id' => $this->faker->unique->randomNumber(),
            'id' => $this->faker->unique()->regexify('[1-9]{2}W[0-9]{6}'),
            //'id' => $this->faker->regexify('[1-9]{8}'),
            'shori_kbn' => $this->faker->numberBetween($min = 0, $max = 1),
            'send_ymd' => NULL,
            'name_k' => $this->faker->kanaName($gender = null),
            'name_j' => $this->faker->name(),
            'syainno' =>  T_syain_sanq01::factory(),
            //'syzkcd' =>  T_sanq_kanren01::factory(),
            'syzkcd' =>  T_kanren_sanq01::factory(),
            'yubin' => $this->faker->postcode(),
            'addr1' => $this->faker->prefecture(),
            'addr2' => $this->faker->city(),
            'addr3' => $this->faker->streetAddress(),
            'tel' => $this->faker->phoneNumber(),
            'tel2' => $this->faker->phonenumber(),
            'juk_crs_no' =>  T_crs_sanq01::factory(),
            'birthday' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'ndo' => $this->faker->numberBetween($min = 2023, $max = 2024),
            'select_kmk' => NULL,
            'seal_no' => NULL,
            //'sek_f' => T_sei::factory(),
            'sek_f' => $this->faker->randomElement(['1', '2', '3', '4', '5', '6', 'x']),

            'memos' => $this->faker->realText($maxNbChars = 25, $indexSize = 1),
            'comments' => NULL,
            'sai' => NULL,
            'sai_jukno' => NULL,
            'sai_juko_renraku' => NULL,
            'e_mail' => $this->faker->safeemail(),
            'kaiymd' => '20230501',
            'cancel_kbn' => $this->faker->numberBetween($min = 0, $max = 1),                       // 姓
            'cancel_ymd' => $this->faker->date($format = 'Y-m-d', $max = 'now'),                    // 名
            'judge_sanq_key' => $this->faker->randomElement(['01', '02', '03', '04', '11', '12', '88', '99']),               // 姓カナ
            'sek_f_updymd' => $this->faker->date($format = 'Y-m-d', $max = 'now'),             // 名カナ
            'f1' => NULL,
            'f2' => NUll,
            'f3' => NULL,
            'f4' => NUll,
            'f5' => NULL,
            'f6' => NUll,
            'f7' => NULL,
        ];
    }
    function makeRandStr($length)
    {
        $str = array_merge(range('a', 'z'), range('0', '9'), range('A', 'Z'));
        $r_str = null;
        for ($i = 0; $i < $length; $i++) {
            $r_str .= $str[rand(0, count($str) - 1)];
        }
        return $r_str;
    }
}
