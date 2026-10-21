<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPmhSekSum01wk01Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_pmh_sek_sum01wk01', function(Blueprint $table)
		{
			$table->string('kgo_cd', 5)->nullable();
			$table->string('p_id', 6)->nullable();
			$table->string('kaiko1', 6)->nullable();
			$table->integer('this_year_sales')->nullable();
			$table->integer('this_year_cost')->nullable();
			$table->float('cost_rate', 10, 0)->nullable();
			$table->dateTime('upd_ymd')->nullable();
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
		Schema::drop('t_pmh_sek_sum01wk01');
	}

}
