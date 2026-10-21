<?php

namespace Database\Seeders\Local;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\T_sei_sanq01;
use App\Models\T_juko_sanq01;
use App\Models\T_syain_sanq01;
use App\Models\T_crs_sanq01;
use App\Models\T_kanren_sanq01;
use App\Models\T_out_hen_sanq01;
use App\Models\T_dantai01;
//use App\Models\Board;
//use App\Models\Person;
use Database\Factories\DeleteTableFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\App;


class testDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //----------------------------------------
    // db:testtest
    //----------------------------------------
    public function run()
    {
        //$res = DB::connection()->getConfig();
        //print_r($res);
        log::debug('--------------------test database start!');
        DB::table('t_syain_sanq01s')->delete();
        DB::table('t_juko_sanq01s')->delete();
        DB::table('t_crs_sanq01s')->delete();
        DB::table('t_kanren_sanq01s')->delete();
        DB::table('t_out_hen_sanq01s')->delete();
        DB::table('t_sei_sanq01s')->delete();
        DB::table('people')->delete();
        //   DB::connection('pgsql_test')->table('t_dantai01s')->delete();
        //DB::connection('pgsql_test')->table('people')->delete();
        //DB::connection('pgsql_test')->table('boards')->delete();
        //$this->call(SampleSeeder::class);
        //$this->call(T_sei_2testtest_TableSeeder::class);
        //$this->call(T_dan_sanq01TableSeeder::class);
        $this->call(T_juko_sanq01TableSeeder::class);
        $this->call(T_crs_sanq01TableSeeder::class);
        $this->call(T_syain_sanq01TableSeeder::class);
        $this->call(PersonTableSeeder::class);
        $this->call(TKanrenSanq01sTableSeeder::class);
        $this->call(TOutHenSanq01sTableSeeder::class);
        $this->call(TSeiSanq01sTableSeeder::class);
        log::debug('--------------------test database-->end');
    }
    //
}
