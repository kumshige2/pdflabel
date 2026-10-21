<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Address;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('addresses')->insert([
            [
                'zipcode' => '1430002',     //郵便番号
                'prefecture' => '東京都',   //都道府県
                'city' => '大田区',         //市区町村
                'town' => '城南島六ー二ー一 カーム城南島 一〇〇六号室',      //町域
                'name' => '高野彦好',       //名前
            ],
            [
                'zipcode' => '1730003',     //郵便番号
                'prefecture' => '東京都',   //都道府県
                'city' => '板橋区',         //市区町村
                'town' => '加賀二ー二ー九',      //町域
                'name' => '米田政広',       //名前
            ],
            [
                'zipcode' => '1940204',     //郵便番号
                'prefecture' => '東京都',   //都道府県
                'city' => '町田市',         //市区町村
                'town' => '小山田桜台一ー一三ー八 アスコットヴィラ小山田桜台 二一二',    //町域
                'name' => '溝口為一郎',     //名前
            ],
            [
                'zipcode' => '1300025',     //郵便番号
                'prefecture' => '東京都',   //都道府県
                'city' => '墨田区',         //市区町村
                'town' => '千歳二ー七ー七五',       //町域
                'name' => '小倉真紀子',     //名前
            ],
            [
                'zipcode' => '2060041',     //郵便番号
                'prefecture' => '東京都',   //都道府県
                'city' => '多摩市',         //市区町村
                'town' => '愛宕五ー二ー九',      //町域
                'name' => '吉井孝市',       //名前
            ]
        ]);
    }
}
