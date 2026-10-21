<?php

namespace Database\Seeders\Local;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use App\Models\T_juko_sanq01;

class T_juko_sanq01TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        T_juko_sanq01::factory()->count(50)->create();
    }
}
