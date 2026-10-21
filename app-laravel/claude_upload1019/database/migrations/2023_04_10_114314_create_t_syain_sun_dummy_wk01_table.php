<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTSyainSunDummyWk01Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_syain_sun_dummy_wk01', function(Blueprint $table)
		{
			$table->string('access_id')->nullable();
			$table->string('syainno')->nullable();
			$table->string('grade')->nullable();
			$table->string('bsy_nm')->nullable();
			$table->string('birth_md')->nullable();
			$table->string('company_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_syain_sun_dummy_wk01');
	}

}
