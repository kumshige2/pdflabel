<?php

namespace Database\Seeders;

//namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\T_sei;
use App\Models\T_juko_sanq01;
use App\Models\T_syain_sanq01;
use App\Models\T_crs_sanq01;
use App\Models\T_sanq_kanren01;
use App\Models\T_dantai01;
use App\Models\Board;
use App\Models\Person;
use Database\Factories\DeleteTableFactory;
use Database\Seeders\Local;
use Database\Seeders\Local\SampleSeeder;
use Database\Seeders\Production;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    const LOCAL = [
        Local\testDatabaseSeeder::class,
    ];

    const PROD = [
        Production\testDatabaseSeeder::class,
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //
    public function run()
    {
        $res = DB::connection()->getConfig();
        print_r($res);
        //$res01 = DB::connection()->getPdog();
        //print_r($res01);
        $res = $this->command->ask('以上の環境で実行します！よいですか？ 1:OK、9:NG(やり直し)---->');
        if (is_numeric($res) === false) {
            $this->command->error('数字で入力してね');
            return;
        }
        $nn = Str::camel('Test_DatabaseSeeder');
        log::debug('--------------------dbseed start---' . $nn);
        $res00 = array();

        $res00 = match (intval($res)) {
            1 => $this->call(Local\testDatabaseSeeder::class),
            2 => $this->call(Local\SampleSeeder::class),
            // 👇 ここに追記：ファイルを直接読み込んで実行する
            3 => (function () {
                $path = database_path('seeders/Production/testtest_DatabaseSeeder.php');
                if (file_exists($path)) {
                    require_once $path;
                    $this->call(\Database\Seeders\Production\testtest_DatabaseSeeder::class);
                } else {
                    $this->command->error('ファイルが見つかりません: ' . $path);
                }
            })(),
            //  3 => $this->run_test($res),
            default  => 'end',
        };
        //print_r($res00);
        //echo (App::environment());
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
        log::debug('--------------------dbseed testtest-->');
        //DB::connection('pgsql_testtest')->table('t_syain_sanq01s')->delete();
        //DB::connection('pgsql_testtest')->table('t_juko_sanq01s')->delete();
        //DB::connection('pgsql_testtest')->table('t_crs_sanq01s')->delete();
        //DB::connection('pgsql_testtest')->table('t_sanq_kanren01s')->delete();
        //DB::connection('pgsql_testtest')->table('t_kanren_sanq01s')->delete();
        //DB::connection('pgsql_testtest')->table('t_out_hen_sanq01s')->delete();
        //DB::connection('pgsql_testtest')->table('t_sei_sanq01s')->delete();
        //   DB::connection('pgsql_testtest')->table('t_dantai01s')->delete();
        //DB::connection('pgsql_testtest')->table('people')->delete();
        //DB::connection('pgsql_testtest')->table('boards')->delete();
        //
        //$this->call(self::LOCAL, ['test']);
        $this->call(Local\Test_DatabaseSeeder::class);
        //$this->command(call(self::LOCAL));
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
