<?php

namespace Database\Seeders\testtest;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use App\Models\T_sei;

class T_sei_2testtest_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('t_sei_sanq01s')->delete();
        DB::connection('pgsql_testtest')->table('t_sei_sanq01s')->insert([
            'key' => '1',
            'sei' => '会社請求',

        ]);
        DB::connection('pgsql_testtest')->table('t_sei_sanq01s')->insert([
            'key' => '2',
            'sei' => '受講者個人請求',

        ]);
        DB::connection('pgsql_testtest')->table('t_sei_sanq01s')->insert([
            'key' => '3',
            'sei' => '賞与引去',

        ]);
        DB::connection('pgsql_testtest')->table('t_sei_sanq01s')->insert([
            'key' => '4',
            'sei' => '預金確認',

        ]);
        DB::connection('pgsql_testtest')->table('t_sei_sanq01s')->insert([
            'key' => '5',
            'sei' => '人事部請求',

        ]);
        DB::connection('pgsql_testtest')->table('t_sei_sanq01s')->insert([
            'key' => '6',
            'sei' => '人事部請求(海外現地採用)',

        ]);
        DB::connection('pgsql_testtest')->table('t_sei_sanq01s')->insert([
            'key' => 'x',
            'sei' => '調査対象',

        ]);
    }
}
