<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTJukSysDat02Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_juk_sys_dat02', function(Blueprint $table)
		{
			$table->string('ndo');
			$table->string('kgo_nm');
			$table->string('kgo_a_cd');
			$table->integer('sum_kin')->nullable();
			$table->integer('tuk')->nullable();
			$table->integer('hak')->nullable();
			$table->integer('kok')->nullable();
			$table->integer('sid')->nullable();
			$table->integer('jut')->nullable();
			$table->integer('tst')->nullable();
			$table->integer('sho')->nullable();
			$table->integer('etc')->nullable();
			$table->dateTime('cre_ymd')->nullable();
			$table->primary(['ndo','kgo_a_cd'], 't_juk_sys_dat02_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_juk_sys_dat02');
	}

}
