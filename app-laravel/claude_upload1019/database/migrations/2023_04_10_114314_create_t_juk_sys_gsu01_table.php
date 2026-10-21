<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTJukSysGsu01Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_juk_sys_gsu01', function(Blueprint $table)
		{
			$table->string('gsu_id', 10)->primary('t_juk_sys_gsu01_pkey');
			$table->string('gsu_xx')->nullable();
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
		Schema::drop('t_juk_sys_gsu01');
	}

}
