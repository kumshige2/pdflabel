<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTSyainSunCnv01Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_syain_sun_cnv01', function(Blueprint $table)
		{
			$table->string('client_id')->nullable();
			$table->string('bef')->nullable();
			$table->string('aft')->nullable();
			$table->string('fld01')->nullable();
			$table->string('fld02')->nullable();
			$table->dateTime('upd_ymd')->nullable();
			$table->dateTime('cre_ymd')->nullable();
			$table->integer('seq', true);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_syain_sun_cnv01');
	}

}
