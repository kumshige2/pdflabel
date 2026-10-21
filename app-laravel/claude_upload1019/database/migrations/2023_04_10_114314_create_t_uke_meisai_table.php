<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTUkeMeisaiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_uke_meisai', function(Blueprint $table)
		{
			$table->string('p_id', 12);
			$table->integer('p_no_seq');
			$table->string('sof_id', 3);
			$table->integer('nko_suryo')->nullable();
			$table->date('nko_ymd')->nullable();
			$table->string('filler')->nullable();
			$table->string('memos', 1000)->nullable();
			$table->dateTime('upd_ymd')->nullable();
			$table->dateTime('cre_ymd')->nullable();
			$table->primary(['p_id','p_no_seq','sof_id'], 't_uke_meisai_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_uke_meisai');
	}

}
