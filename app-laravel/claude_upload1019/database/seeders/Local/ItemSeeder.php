<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'name' => 'りんご'
        ];

        DB::table('items')->insert($param);

        $param = [
            'name' => 'ばなな'
        ];

        DB::table('items')->insert($param);

        $param = [
            'name' => 'ぶどう'
        ];

        DB::table('items')->insert($param);
    }
}
