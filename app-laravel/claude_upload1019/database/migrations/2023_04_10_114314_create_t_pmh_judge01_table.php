<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPmhJudge01Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_pmh_judge01', function(Blueprint $table)
		{
			$table->string('p_id', 10);
			$table->string('p_nd', 4);
			$table->string('message', 1000)->nullable();
			$table->integer('pmh_judge_kbn')->nullable();
			$table->dateTime('upd_ymd')->nullable();
			$table->dateTime('cre_ymd')->nullable();
			$table->primary(['p_id','p_nd'], 't_pmh_judge01_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_pmh_judge01');
	}

}
