<?php

namespace Database\Factories;

use App\Models\T_sei;
use App\Models\T_juko_sanq01;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class T_seiFactory extends Factory
{
    protected $model = T_sei::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //  DB::table('t_seis')->delete();
        $keys = ['1', '2', '3', '4', '5', '6', 'x'];
        $seis = ['会社請求', '受講者個人請求', '賞与引去', '預金確認', '人事部請求', '人事部請求(海外現地採用)', '調査対象'];
        $idx = rand(0, count($keys) - 1);
        $key = $keys[$idx];
        $sei = $seis[$idx];
        return [
            'key' => $key,
            'sei' => $sei,
        ];
    }
}
