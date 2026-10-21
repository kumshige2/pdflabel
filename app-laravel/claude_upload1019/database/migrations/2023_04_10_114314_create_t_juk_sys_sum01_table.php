<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTJukSysSum01Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_juk_sys_sum01', function(Blueprint $table)
		{
			$table->string('ndo', 10);
			$table->string('crs_nm', 150);
			$table->string('kmk', 10)->nullable();
			$table->string('dantai_nm', 100)->nullable();
			$table->integer('ninzu')->nullable();
			$table->integer('ryokin')->nullable();
			$table->integer('sum_ryokin')->nullable();
			$table->dateTime('cre_ymd')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_juk_sys_sum01');
	}

}
