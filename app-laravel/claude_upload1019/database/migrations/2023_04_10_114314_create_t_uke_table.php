<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTUkeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_uke', function(Blueprint $table)
		{
			$table->string('p_id', 12);
			$table->integer('p_no_seq');
			$table->string('kaiko', 10)->nullable();
			$table->string('noki', 50)->nullable();
			$table->string('kgo_nm', 50)->nullable();
			$table->integer('flg')->nullable();
			$table->date('has_ira_ymd')->nullable();
			$table->date('has_ymd')->nullable();
			$table->integer('seq')->nullable();
			$table->string('filler', 50)->nullable();
			$table->dateTime('upd_ymd')->nullable();
			$table->dateTime('cre_ymd')->nullable();
			$table->string('p_nd', 4)->nullable();
			$table->primary(['p_id','p_no_seq'], 't_uke_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_uke');
	}

}
