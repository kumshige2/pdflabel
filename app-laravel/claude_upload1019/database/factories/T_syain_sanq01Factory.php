<?php

namespace Database\Factories;

use App\Models\T_syain_sanq01;
use App\Models\T_sei;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class T_syain_sanq01Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = T_syain_sanq01::class;
    public function definition()
    {
        // DB::table('t_syain_sanq01s')->delete();
        //
        return [
            // 'id' => $this->faker->unique->randomNumber(),
            'syainno' => $this->faker->unique()->numberBetween($min = 16800044, $max = 16810673),
            'syain_nm_j' => $this->faker->name(),
            'syain_nm_k' => $this->faker->kanaName($gender = null),
            'koy_kbn' => $this->faker->postcode1(),
            'koy_nm' => $this->faker->randomElement($arraY = ['一般社員', 'エルダー社員', 'スーパーエルダー社員', '出向受入者', 'アルバイト', '理事', '参与Ａ', '事務職', '参与Ｂ']),
            'tesymd' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'tai_ymd' => NuLL,
            'swacd' => $this->faker->regexify('[0-9]{4}'),
            'swanm' => $this->faker->company(),
            'syk_kgocd' => NULL,
            'syk_kgonm' => NULL,
            'yakcd' => $this->faker->numberBetween($min = 0, $max = 1),
            'yaknm' => $this->faker->randomElement($arraY = ['対象', '対象外']),
            'syzkcd' => $this->faker->regexify('/^([a-zA-Z0-9]{12})$/{}'),
            'syzknm' => $this->faker->company(),
            'domcd' => $this->faker->randomElement($arraY = ['01', '02', '03']),
            'domnm' => $this->faker->randomElement($arraY = ['国内', '', '海外']),
            'cyuzai_kbn' => $this->faker->randomElement($arraY = ['01', '02', '03', '']),
            'cyuzai_nm' => $this->faker->randomElement($arraY = ['国内駐在', '', '海外駐在', '']),
            'saiyo_kbn' => $this->faker->randomElement($arraY = ['01', '02', '03', '04', '8', '9']),
            'saiyo_nm' => $this->faker->randomElement($arraY = ['定期採用', '中途採用', '出向受入', '直接転籍', 'その他', '不明']),
            'nyusya_ymd' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'birthday' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
