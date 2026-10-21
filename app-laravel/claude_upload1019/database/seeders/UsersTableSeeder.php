<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => '1',
                'name' => 'system',
                'email' => 'system@hj.sanno.ac.jp',
                'password' => Hash::make('system'), 
                'remember_token' => str_random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'avatar' => 'users/default.png',
                'role_id' => 1,
                'settings' => NULL,
            ),
             1 =>
            array (
                 'id' => '5',
                'name' => 'admin',
                'email' => 'admin@hj.sanno.ac.jp',
                'password' => Hash::make('admin'), 
                'remember_token' => str_random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'avatar' => 'users/default.png',
                'role_id' => 5,
                'settings' => NULL,
            ),
               2 =>
            array (
                 'id' => '9',
                'name' => 'user',
                'email' => 'user@hj.sanno.ac.jp',
                'password' => Hash::make('user'), 
                'remember_token' => str_random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'avatar' => 'users/default.png',
                'role_id' => 9,
                'settings' => NULL,
            ),
			     3 =>
            array (
                 'id' => '3004522',
                'name' => '3004522',
                'email' => 'ichikawa_hiroshi@hj.sanno.ac.jp',
                'password' => Hash::make('3004522'), 
                'remember_token' => str_random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'avatar' => 'users/default.png',
                'role_id' => 9,
                'settings' => NULL,
            ),
			     4 =>
            array (
                 'id' => '3002008',
                'name' => '3002008',
                'email' => 'sato_masumi@hj.sanno.ac.jp',
                'password' => Hash::make('3002008'), 
                'remember_token' => str_random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'avatar' => 'users/default.png',
                'role_id' => 9,
                'settings' => NULL,
            ),
			     5 =>
            array (
                 'id' => '3007574',
                'name' => '3007574',
                'email' => 'matsuki_eriko@hj.sanno.ac.jp',
                'password' => Hash::make('3007574'), 
                'remember_token' => str_random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'avatar' => 'users/default.png',
                'role_id' => 9,
                'settings' => NULL,
            ),
			     6 =>
            array (
                 'id' => '3006873',
                'name' => '3006873',
                'email' => 'tsuhara_mami@hj.sanno.ac.jp',
                'password' => Hash::make('3006873'), 
                'remember_token' => str_random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'avatar' => 'users/default.png',
                'role_id' => 9,
                'settings' => NULL,
            ),
			 7 =>
			 array (
                 'id' => '3002797',
                'name' => '3002797',
                'email' => 'kumashiro_shigetaka@hj.sanno.ac.jp',
                'password' => Hash::make('3002797'), 
                'remember_token' => str_random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'avatar' => 'users/default.png',
                'role_id' => 1,
                'settings' => NULL,
            ),
            8 =>
            array (
                 'id' => '3005332',
                'name' => '3005332',
                'email' => 'nakai_shima@hj.sanno.ac.jp',
                'password' => Hash::make('3005332'), 
                'remember_token' => str_random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'avatar' => 'users/default.png',
                'role_id' => 9,
                'settings' => NULL,
            ),
           9 =>
            array (
                 'id' => '3005521',
                'name' => '3005521',
                'email' => 'suganuma_sayuri@hj.sanno.ac.jp',
                'password' => Hash::make('3005521'), 
                'remember_token' => str_random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'avatar' => 'users/default.png',
                'role_id' => 9,
                'settings' => NULL,
            ),
            10 =>
            array (
                 'id' => '3002893',
                'name' => '3002893',
                'email' => 'kutsuzawa_yuuka@hj.sanno.ac.jp',
                'password' => Hash::make('3002893'), 
                'remember_token' => str_random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'avatar' => 'users/default.png',
                'role_id' => 9,
                'settings' => NULL,
            ),
    ));
  //  factory(App\User::class, 5)->create();
    }
}
