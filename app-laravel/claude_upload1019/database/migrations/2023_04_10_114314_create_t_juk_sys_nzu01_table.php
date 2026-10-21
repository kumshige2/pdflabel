<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTJukSysNzu01Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_juk_sys_nzu01', function(Blueprint $table)
		{
			$table->string('nzu_id', 10)->primary('t_juk_sys_nzu01_pkey');
			$table->string('nzu_fr', 10)->nullable();
			$table->string('nzu_to', 10)->nullable();
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
		Schema::drop('t_juk_sys_nzu01');
	}

}
