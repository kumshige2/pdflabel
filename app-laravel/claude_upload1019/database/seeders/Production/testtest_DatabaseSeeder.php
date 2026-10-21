<?php

namespace Database\Seeders\Production;

//namespace Database\Factories;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\T_sei;
use App\Models\t_juko_sanq01;
use App\Models\t_syain_sanq01;
use App\Models\t_crs_sanq01;
use App\Models\t_sanq_kanren01;
use App\Models\t_dantai01;
use App\Models\Board;
use App\Models\Person;
use Database\Factories\DeleteTableFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\App;

class testtest_DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $res = $this->command->ask('どの環境で作る? 1:test(本番疑似環境用)、2:testtest(単体test用)    本番環境は指定不可');
        if (is_numeric($res) === false) {
            $this->command->error('数字で入力してね');
            return;
        }
        log::debug('--------------------dbseed start---' . $res);
        $res00 = array();
        $res00 = match (intval($res)) {
            1 =>  'aa',
            2 => $this->run_testtest($res),
            3 => $this->run_test($res),
            default  => 'end',
        };
        //print_r($res00);
        echo (App::environment());
        log::debug('--------------------dbseed end---');
    }
    //----------------------------------------
    // db:snno3_test
    //----------------------------------------
    public function run_test()
    {
        log::debug('--------------------dbseed run_test---');
        DB::table('t_syain_sanq01s')->delete();
        DB::table('t_juko_sanq01s')->delete();
        DB::table('t_crs_sanq01s')->delete();
        //DB::table('t_sanq_kanren01s')->delete();
        DB::table('t_kanren_sanq01s')->delete();
        DB::table('t_out_hen_sanq01s')->delete();
        DB::table('t_sei_sanq01s')->delete();
        //   DB::table('t_dantai01s')->delete();
        DB::table('people')->delete();
        DB::table('boards')->delete();
        $this->call([
            T_seiTableSeeder::class,
        ]);
        T_syain_sanq01::factory(50)->create();
        //T_sanq_kanren01::factory(50)->create();
        T_crs_sanq01::factory(50)->create();
        //   T_dantai01::factory(50)->create();
        T_juko_sanq01::factory(50)->create();
        Person::factory(10)->create();
        Board::factory(30)->create();
        $this->call(TKanrenSanq01sTableSeeder::class);
        $this->call(TOutHenSanq01sTableSeeder::class);
        $this->call(TDanSanq01sTableSeeder::class);
    }
    //----------------------------------------
    // db:testtest
    //----------------------------------------
    public function run_testtest()
    {
        log::debug('--------------------dbseed testtest');
        DB::connection('pgsql_testtest')->table('t_syain_sanq01s')->delete();
        DB::connection('pgsql_testtest')->table('t_juko_sanq01s')->delete();
        DB::connection('pgsql_testtest')->table('t_crs_sanq01s')->delete();
        //DB::connection('pgsql_testtest')->table('t_sanq_kanren01s')->delete();
        DB::connection('pgsql_testtest')->table('t_kanren_sanq01s')->delete();
        DB::connection('pgsql_testtest')->table('t_out_hen_sanq01s')->delete();
        DB::connection('pgsql_testtest')->table('t_sei_sanq01s')->delete();
        //   DB::connection('pgsql_testtest')->table('t_dantai01s')->delete();
        DB::connection('pgsql_testtest')->table('people')->delete();
        DB::connection('pgsql_testtest')->table('boards')->delete();
        $this->call(T_sei_2testtest_TableSeeder::class);
        /*----
        T_syain_sanq01::factory(50)->create();
        //T_sanq_kanren01::factory(50)->create();
        T_crs_sanq01::factory(50)->create();
        //   T_dantai01::factory(50)->create();
        T_juko_sanq01::factory(50)->create();
        Person::factory(10)->create();
        Board::factory(30)->create();
        $this->call(TKanrenSanq01sTableSeeder::class);
        $this->call(TOutHenSanq01sTableSeeder::class);
        $this->call(TDanSanq01sTableSeeder::class);
        ---*/
    }
}
