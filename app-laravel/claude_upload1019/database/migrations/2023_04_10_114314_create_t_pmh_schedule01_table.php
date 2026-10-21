<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPmhSchedule01Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_pmh_schedule01', function(Blueprint $table)
		{
			$table->string('p_id', 10);
			$table->string('kaiko1', 10);
			$table->string('pmh_type', 10);
			$table->dateTime('ymd01')->nullable();
			$table->dateTime('ymd02')->nullable();
			$table->dateTime('ymd03')->nullable();
			$table->dateTime('ymd04')->nullable();
			$table->dateTime('ymd05')->nullable();
			$table->dateTime('ymd06')->nullable();
			$table->dateTime('ymd07')->nullable();
			$table->dateTime('ymd08')->nullable();
			$table->dateTime('ymd09')->nullable();
			$table->dateTime('ymd10')->nullable();
			$table->dateTime('tes_ymd')->nullable();
			$table->string('tes_sts', 1)->nullable();
			$table->string('xx1_sts', 1)->nullable();
			$table->string('xx2_sts', 1)->nullable();
			$table->string('xx3_sts', 1)->nullable();
			$table->string('p_nm')->nullable();
			$table->string('filler02')->nullable();
			$table->string('filler03')->nullable();
			$table->string('memos', 1000)->nullable();
			$table->dateTime('upd_ymd')->nullable();
			$table->dateTime('cre_ymd')->nullable();
			$table->primary(['p_id','kaiko1','pmh_type'], 't_pmh_schedule01_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_pmh_schedule01');
	}

}
