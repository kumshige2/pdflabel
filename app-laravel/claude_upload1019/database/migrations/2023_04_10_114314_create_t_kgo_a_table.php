<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTKgoATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_kgo_a', function(Blueprint $table)
		{
			$table->string('kgo_a_cd', 5)->primary('t_kgo_a_pkey');
			$table->string('kei_kgo_nm_j')->nullable();
			$table->string('tuk_kgo_nm_j')->nullable();
			$table->boolean('ng_flg')->nullable();
			$table->dateTime('cre_ymd')->nullable();
			$table->dateTime('upd_ymd')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_kgo_a');
	}

}
